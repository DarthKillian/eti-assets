<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RMA extends Model
{
    use HasFactory;

    protected $table = 'rma';
    protected $fillable = [
        'asset_id',
        'rma_number',
        'case_number',
        'user_id',
        'manufacturer_id',
        'company_id',
        'technician',
        'status',
        'notes',
        'start_date',
        'completion_date',
    ];

    /**
     * Define Assets relationship
     */
    public function assets()
    {
        return $this->belongsTo(\App\Models\Asset::class, 'asset_id');
    }

    /**
     * Define Company relationship
     */

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class, 'company_id');
    }

    /**
     * Define Users relationship
     */
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * Define Manufacturer relationship
     */
    public function manufacturer()
    {
        return $this->belongsTo(\App\Models\Manufacturer::class, 'manufacturer_id');
    }

    // Declare status options
    public function getStatusOptions()
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
