<?php

namespace App\Http\Controllers\Assets;

use App\Exceptions\CheckoutNotAllowed;
use App\Helpers\Helper;
use App\Http\Controllers\CheckInOutRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\AssetCheckoutRequest;
use App\Models\Asset;
use App\Models\Statuslabel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Session;
use \Illuminate\Contracts\View\View;
use \Illuminate\Http\RedirectResponse;

class AssetCheckoutController extends Controller
{
    use CheckInOutRequest;

    /**
     * Returns a view that presents a form to check an asset out to a
     * user.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @param int $assetId
     * @since [v1.0]
     * @return \Illuminate\Contracts\View\View
     */
    public function create($assetId) : View | RedirectResponse
    {
        // Check if the asset exists
        if (is_null($asset = Asset::with('company')->find(e($assetId)))) {
            return redirect()->route('hardware.index')->with('error', trans('admin/hardware/message.does_not_exist'));
        }

        $this->authorize('checkout', $asset);

        if (!$asset->model) {
            return redirect()->route('hardware.show', $asset->id)->with('error', trans('admin/hardware/general.model_invalid_fix'));
        }

        if ($asset->availableForCheckout()) {
            return view('hardware/checkout', compact('asset'))
                ->with('statusLabel_list', Helper::deployableStatusLabelList())
                ->with('table_name', 'Assets');
        }


        return redirect()->route('hardware.index')->with('error', trans('admin/hardware/message.checkout.not_available'));
    }

    /**
     * Validate and process the form data to check out an asset to a user.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @param AssetCheckoutRequest $request
     * @since [v1.0]
     */
    public function store(AssetCheckoutRequest $request, $assetId) : RedirectResponse
    {
        try {
            // Check if the asset exists
            if (! $asset = Asset::find($assetId)) {
                return redirect()->route('hardware.index')->with('error', trans('admin/hardware/message.does_not_exist'));
            } elseif (! $asset->availableForCheckout()) {
                return redirect()->route('hardware.index')->with('error', trans('admin/hardware/message.checkout.not_available'));
            }
            $this->authorize('checkout', $asset);

            if (!$asset->model) {
                return redirect()->route('hardware.show', $asset->id)->with('error', trans('admin/hardware/general.model_invalid_fix'));
            }

            $admin = auth()->user();

            $target = $this->determineCheckoutTarget();

            $asset = $this->updateAssetLocation($asset, $target);

            $checkout_at = date('Y-m-d H:i:s');
            if (($request->filled('checkout_at')) && ($request->get('checkout_at') != date('Y-m-d'))) {
                $checkout_at = $request->get('checkout_at');
            }

            /*
                Removing expected checkin as that is not anything we use. Adding Company support for checkouts instead. 
                @DarthKillian
            */
            
            /* $expected_checkin = '';
            if ($request->filled('expected_checkin')) {
                $expected_checkin = $request->get('expected_checkin');
            } */

            $company_id = '';
            if ($request->filled('company_id')) {
                $company_id = $request->get('company_id');
            }

            $status_id = '';
            if ($request->filled('status_id')) {
                $status_id = $request->get('status_id');
            }

            $order_number = '';
            if($request->filled('order_number')) {
                $order_number = $request->input('order_number');
            }

            $status = Statuslabel::find($status_id);

            if($status->name == "Deployed" || $status->name == "Delivered to Customer Site") {
                Asset::clearAudit($asset);
            }

            if(!empty($asset->licenseseats->all())){
                if(request('checkout_to_type') == 'user') {
                    foreach ($asset->licenseseats as $seat){
                        $seat->assigned_to = $target->id;
                        $seat->save();
                    }
                }
            }

            $settings = \App\Models\Setting::getSettings();

            // We have to check whether $target->company_id is null here since locations don't have a company yet
            if (($settings->full_multiple_companies_support) && ((!is_null($target->company_id)) &&  (!is_null($asset->company_id)))) {
                if ($target->company_id != $asset->company_id){
                    return redirect()->to("hardware/$assetId/checkout")->with('error', trans('general.error_user_company'));
                }
            }

                session()->put(['redirect_option' => $request->get('redirect_option'), 'checkout_to_type' => $request->get('checkout_to_type')]);

            if ($asset->checkOut($target, $admin, $checkout_at, $expected_checkin, $request->get('note'), $request->get('name'))) {
                return redirect()->to(Helper::getRedirectOption($request, $asset->id, 'Assets'))
                    ->with('success', trans('admin/hardware/message.checkout.success'));
            }
            // Redirect to the asset management page with error
            return redirect()->to("hardware/$assetId/checkout")->with('error', trans('admin/hardware/message.checkout.error').$asset->getErrors());
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', trans('admin/hardware/message.checkout.error'))->withErrors($asset->getErrors());
        } catch (CheckoutNotAllowed $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}