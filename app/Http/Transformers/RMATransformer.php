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
            'asset' => ($rma->assets) ? ['id' => $rma->assets->id, 'serial' => $rma->assets->serial, 'asset_tag' => e($rma->assets->asset_tag)] : null,
            'rma_number' => $rma->rma_number,
        ];

       /*  $permissions_array['available_actions'] = [
            'checkout' => Gate::allows('checkout', Accessory::class),
            'checkin' =>  false,
            'update' => Gate::allows('update', Accessory::class),
            'delete' => Gate::allows('delete', Accessory::class),
            'clone' => Gate::allows('create', Accessory::class),
            
        ]; */

        // $permissions_array['user_can_checkout'] = false;

        /* if ($accessory->numRemaining() > 0) {
            $permissions_array['user_can_checkout'] = true;
        } */

        // $array += $permissions_array;
        return $array;
    }
}
