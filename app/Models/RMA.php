<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Traits\Acceptable;
use App\Models\Traits\Searchable;

class RMA extends Model
{
    use HasFactory;

    protected $table = 'rma';
    protected $fillable = [
        'asset_id',
        'rma_number',
        'case_number',
        'user_id',
        'technician',
        'status',
        'notes',
        'start_date',
        'completion_date',
    ];

    protected $searchableAttributes = ['rma_number', 'case_number', 'technician', 'notes', 'status', 'start_date', 'completion_date'];

    /**
     * Establish Assets -> rma relationship
     */
    public function assets()
    {
        return $this->belongsTo(\App\Models\Asset::class, 'asset_id');
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
            'Pending',
            'RMA Approved | Warranty Repair',
            'RMA Approved | OOW Repair',
            'RMA Out for Repair',
            'RMA Declined',
        ];
    }
}
