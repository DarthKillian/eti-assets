<?php

namespace App\Http\Transformers;

use App\Helpers\Helper;
use App\Models\RMA;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class RMATransformer
{
    public function transformRMAs(Collection $rmas, $total)
    {
        $array = [];
        foreach ($rmas as $rma) {
            $array[] = self::transformRMA($rma);
        }

        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformRMA(RMA $rma)
    {

        $array = [
            'id' => $rma->id,
            'asset' => ($rma->asset) ? ['id' => $rma->asset->id, 'serial' => $rma->asset->serial, 'asset_tag' => e($rma->asset->asset_tag)] : null,
            'new_asset' => ($rma->newAsset) ? ['id' => $rma->newAsset->id, 'serial' => $rma->newAsset->serial, 'asset_tag' => e($rma->newAsset->asset_tag)] : null,
            'rma_number' => $rma->rma_number,
            'case_number' => $rma->case_number,
            'with_admin' => ($rma->with_admin ? true : false),
            'warranty_expired' =>( $rma->warranty_expired ? true : false),
            'repair_cost' => $rma->repair_cost,
            'company' => $rma->asset->company->name,
            'status' => $rma->status,
            'technician' => $rma->technician,
            'notes' => $rma->notes,
            'requestor' => $rma->users->first_name . " " . $rma->users->last_name,
            'start_date' => $rma->start_date,
            'completion_date' => $rma->completion_date,
            'manufacturer' => $rma->asset->model->manufacturer->name
        ];

        $permissions_array['available_actions'] = [
            'update' => Gate::allows('update', RMA::class),
            'delete' => Gate::allows('delete', RMA::class),
            'clone' => Gate::allows('create', RMA::class),
            
        ];

        // $permissions_array['user_can_checkout'] = false;

        /* if ($accessory->numRemaining() > 0) {
            $permissions_array['user_can_checkout'] = true;
        } */

        $array += $permissions_array;
        return $array;
    }
}
