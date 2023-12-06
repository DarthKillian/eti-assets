<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Traits\Acceptable;
use App\Models\Traits\Searchable;
use Watson\Validating\ValidatingTrait;

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
        'user_id',
        'technician',
        'status',
        'notes',
        'start_date',
        'completion_date',
    ];

    use Searchable;
    use Acceptable;
    protected $searchableAttributes = ['rma_number', 'case_number', 'technician', 'notes', 'status', 'start_date', 'completion_date'];

    protected $searchableRelations = [
        'asset' => ['asset_tag', 'serial'],
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
        'technician' => 'required',
        'start_date' => 'required',
        'completion_date' => 'nullable',
    ];

    /**
     * Establish Assets -> rma relationship
     */
    public function asset()
    {
        return $this->belongsTo(\App\Models\Asset::class, 'asset_id');
    }

    public function newAsset()
    {
        return $this->belongsTo(\App\Models\Asset::class, 'new_asset_id');
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
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * Establish Manufacturer -> rma relationship
     */
    public function manufacturer()
    {
        return $this->belongsTo(\App\Models\Manufacturer::class, 'manufacturer_id');
    }

    // Declare status options
    static public function getStatusOptions():array
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
}
