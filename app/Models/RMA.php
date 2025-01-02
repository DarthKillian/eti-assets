<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Traits\Acceptable;
use App\Models\Traits\Searchable;
use Watson\Validating\ValidatingTrait;
use Carbon\Carbon;
use Auth;

class RMA extends Model
{
    use HasFactory, ValidatingTrait;

    protected $table = 'rma';
    protected $fillable = [
        'asset_id',
        'new_asset_id',
        'rma_number',
        'case_number',
        'with_admin',
        'warranty_expired',
        'repair_cost',
        'created_by',
        'contact',
        'status',
        'notes',
        'start_date',
        'completion_date',
    ];

    use Searchable;
    use Acceptable;
    protected $searchableAttributes = ['rma_number', 'case_number', 'contact', 'notes', 'status', 'start_date', 'completion_date'];

    protected $searchableRelations = [
        'asset' => ['asset_tag', 'serial', 'deleted_at'],
        'asset.company' => ['name'],
        'asset.model.manufacturer' => ['name'],
        'newAsset' => ['asset_tag', 'serial'],
        'newAsset.company' => ['name'],
        'newAsset.model.manufacturer' => ['name']
    ];

    protected $rules = [
        'asset_id' => 'required|integer',
        // 'new_asset_id' => 'nullable',
        // 'with_admin' => 'required|integer',
        // 'warranty_expired' => 'integer|nullable',
        // 'repair_cost' => 'nullable',
        // 'rma_status' => 'required',
        'notes' => 'required',
        'contact' => 'required',
        'start_date' => 'required',
    ];

    /**
     * Establish Assets -> rma relationship
     */
    public function asset()
    {
        return $this->belongsTo(\App\Models\Asset::class, 'asset_id');
    }

    /**
     * Establish new asset relationship
     */

    public function newAsset()
    {
        return $this->belongsTo(\App\Models\Asset::class, 'new_asset_id');
    }

    /**
     * 
     * Establish rma -> asset maintenance relationship
     */
    public function assetMaintenance()
    {
        return $this->hasMany(\App\Models\AssetMaintenance::class, 'id', 'asset_maintenance_id');
    }

    /**
     * Establish Company -> rma relationship
     */

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'company_id');
    }

    /**
     * Establish user -> rma relationship
     */
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }

    /**
     * Establish Manufacturer -> rma relationship
     */
    public function manufacturer()
    {
        return $this->belongsTo(\App\Models\Manufacturer::class, 'manufacturer_id');
    }

    // Declare status options
    static public function getStatusOptions(): array
    {
        return [
            'Pending' => 'Pending',
            'RMA Approved | Advanced Replacement' => 'RMA Approved | Advanced Replacement',
            'RMA Approved | Warranty Repair' => 'RMA Approved | Warranty Repair',
            'RMA Approved | OOW Repair' => 'RMA Approved | OOW Repair',
            'RMA Out for Repair' => 'RMA Out for Repair',
            'RMA Complete' => 'RMA Complete',
            'RMA Declined' => 'RMA Declined',
        ];
    }

    /**
     * Get Asset Status Labels through relationship and return the id of the label
     * @return
     */
    private function getStatusID($status)
    {
        return $this->asset->assetStatus->where('name', $status)->firstOrFail();
    }

    /**
     * Update Asset Status after RMA gets saved/Updated
     * 
     * This method is kind of clunky with switch/case & if statements but is necessary to check the old RMA status and new RMA status to properly update & track asset status & maintenance status
     */
    public function updateAsset($oldRMAStatus = null, $oldAssetStatus = null)
    {
        $statusID = null;
        $newRMAStatus = $this->status;

        if ($newRMAStatus == null) {
            $newRMAStatus = "Pending";
        }

        switch ($newRMAStatus) {
            case "Pending":
                // New RMA request | Set to RMA Requested
                $statusID = $this->getStatusID('RMA Requested')->id;
                $this->asset->status_id = $statusID;
                break;
            case "RMA Approved | Warranty Repair":
                // RMA Approved
                $statusID = $this->getStatusID('RMA Approved - Ready to Ship')->id;
                $this->asset->status_id = $statusID;
                break;
            case "RMA Approved | OOW Repair":
                // RMA Approved
                $statusID = $this->getStatusID('RMA Approved - Ready to Ship')->id;
                $this->asset->status_id = $statusID;
                break;
            case "RMA Approved | Advanced Replacement":
                // Advanced Replacement
                $statusID = $this->getStatusID('Advanced Replacement')->id;
                $this->asset->status_id = $statusID;
                break;
            case "RMA Out for Repair":
                // RMA Out for Warranty Repair
                if ($oldRMAStatus == "RMA Approved | Warranty Repair") {
                    $statusID = $this->getStatusID('RMA Out for Repair')->id;
                    $this->asset->status_id = $statusID;
                }

                // RMA Out for OOW Repair
                if ($oldRMAStatus == "RMA Approved | OOW Repair") {
                    $statusID = $this->getStatusID('Out for non-Warranty Repair')->id;
                    $this->asset->status_id = $statusID;
                }
                break;
            case "RMA Complete":
                // New Asset Serial Number received
                if ($oldRMAStatus == "RMA Out for Repair" && $this->new_asset_id != null) {
                    $statusID = $this->getStatusID('RMA Complete/Returned to Vendor')->id;
                    $this->asset->status_id = $statusID;
                }
                // This part is disgusting looking.... completes RMA with either it being for ETI stock or for customer
                if ($oldRMAStatus == "RMA Out for Repair" && $this->new_asset_id == null) {
                    if ($this->asset->company->name != "ETI") {
                        $statusID = $this->getStatusID('Ready to Deploy')->id;
                        $this->asset->status_id = $statusID;
                    }

                    if ($this->asset->company->name == "ETI") {
                        $statusID = $this->getStatusID('Stock')->id;
                        $this->asset->status_id = $statusID;
                    }
                }
                if ($oldRMAStatus == "RMA Approved | Advanced Replacement") {
                    $statusID = $this->getStatusID('RMA Complete/Returned to Vendor')->id;
                    $this->asset->status_id = $statusID;
                }
                break;
            case "RMA Declined":
                $statusID = $this->getStatusID('Decomissioned/Retired')->id;
                $this->asset->status_id = $statusID;
                break;
        }

        return $this->asset->save() ? true : false;
    }

    /**
     * \App\Models\AssetMaintenance
     * Creates or updates an asset maintenance during RMA update method
     */
    public function setAssetMaintenance($method)
    {
        if ($method == "create") {
            $maintenance = new \App\Models\AssetMaintenance();
            $maintenance->rma_id = $this->id;
            $maintenance->notes = $this->notes . "\n" . "AUTO CREATED BY: " . Auth::user()->first_name . " " . Auth::user()->last_name . " FROM RMA: " . $this->rma_number . " " . Carbon::now()->isoFormat('Y-MM-DD HH:MM');
        }

        if ($method == "update") {
            $maintenance = \App\Models\AssetMaintenance::find($this->asset_maintenance_id);
            $maintenance->notes = $this->notes . "\n" . "AUTO CREATED BY: " . $this->users->first_name . " " . $this->users->last_name . " FROM RMA: " . $this->rma_number;
            $maintenance->notes .= "\n" . "AUTO UPDATED BY: " . Auth::user()->first_name . " " . Auth::user()->last_name . " FROM RMA: " . $this->rma_number . " " . Carbon::now()->isoFormat('Y-MM-DD HH:MM');
        }
        
        $maintenance->asset_id = $this->asset_id;

        switch ($this->status) {
            case str_contains($this->status, "Advanced Replacement"):
                $maintenance->asset_maintenance_type = "Advanced Replacement";
                break;
            case str_contains($this->status, "Warranty Repair"):
                $maintenance->asset_maintenance_type = "Warranty RMA";
                break;
            case str_contains($this->status, "OOW Repair"):
                $maintenance->asset_maintenance_type = "OOW Repair";
                break;
            case "RMA Complete":
                $maintenance->completion_date = $this->completion_date;
                break;
        }
        $maintenance->title = $this->asset->serial . " | RMA # " . $this->rma_number;
        $maintenance->created_by = $this->created_by;
        $maintenance->start_date = $this->start_date;
        
        if ($this->warranty_expired == 0) {
            $maintenance->is_warranty = 1;
        }

        if ($maintenance->save()) {
            $this->asset_maintenance_id = $maintenance->id;
            return true;
        }
        return false;

    }

    /**
     * 
     * Begin query scopes
     */

    public function scopeCheckRMAComplete($query, $assetID)
    {
        return $query->where('asset_id', $assetID)->where('completion_date', null);
    }
}
