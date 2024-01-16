<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RMA;
use Auth;
use App\Helpers\Helper;
use App\Http\Transformers\RMATransformer;
use DB;
use Illuminate\Http\Request;

class RMARequestController extends Controller
{
    public function index(Request $request)
    {
        $allowed_columns = [
            'id',
            'rma_number',
            'case_number',
            'technician',
            'status',
            'notes',
            'start_date',
            'completion_date'
        ];

        $rmas = RMA::select('rma.*')->with('asset', 'asset.company', 'asset.model.manufacturer', 'newAsset', 'newAsset.company', 'newAsset.model.manufacturer');

        if ($request->filled('search')) {
            $rmas = $rmas->TextSearch($request->input('search'));
        }

        $offset = ($request->input('offset') > $rmas->count()) ? $rmas->count() : abs($request->input('offset'));
        $limit = app('api_limit_value');

        $order = $request->input('order') === 'asc' ? 'asc' : 'desc';
        $sort_override =  $request->input('sort');
        $column_sort = in_array($sort_override, $allowed_columns) ? $sort_override : 'created_at';

        switch ($sort_override) {
            case 'company':
                $rmas = $rmas->OrderCompany($order);
                break;
            case 'manufacturer':
                $rmas = $rmas->OrderManufacturer($order);
                break;    
            default:
                $rmas = $rmas->orderBy($column_sort, $order);
                break;
        }

        $total = $rmas->count();

        $rmas = $rmas->skip($offset)->take($limit)->get();

        return (new RMATransformer)->transformRMAs($rmas, $total);
    }
}
