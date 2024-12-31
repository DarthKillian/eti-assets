
@extends('layouts/default')

{{-- Page title --}}
@section('title')
     {{ trans('admin/hardware/general.bulk_checkout') }}
@parent
@stop

{{-- Page content --}}
@section('content')

<style>
  .input-group {
    padding-left: 0px !important;
  }
</style>


<div class="row">
  <!-- left column -->
  <div class="col-md-7">
    <div class="box box-default">
      <div class="box-header with-border">
        <h2 class="box-title"> {{ trans('admin/hardware/form.tag') }} </h2>
      </div>
      <div class="box-body">
        <form class="form-horizontal" method="post" action="" autocomplete="off">
          {{ csrf_field() }}

           {{-- Company --}}
           @include ('partials.forms.edit.company-select', ['translated_name' => trans('general.company'), 'fieldname' => 'company_id'])

           {{-- Order number --}}
           <div class="form-group {{ $errors->has('order_number') ? ' has-error' : '' }}">
             <label for="order_number" class="col-md-3 control-label">{{ trans('general.order_number') }}</label>
             <div class="col-md-7 col-sm-12 required">
                 <input class="form-control" type="text" name="order_number" placeholder="Order Number" aria-label="order_number" id="order_number" value="{{ old('order_number') }}" />
                 {!! $errors->first('order_number', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
             </div>
          </div>
 
           {{-- Status select.... heavily butchered and Frankensteined until I find a better solution... --}}
           <div class="form-group">
             {{ Form::label("Status", "Status", array('class' => 'col-md-3 control-label')) }}
             <div class="col-md-7 required">
               <select class="js-data-ajax" data-endpoint="statuslabels" data-placeholder="{{ trans('general.select_statuslabel') }}" name="status_id" style="width: 100%" id="status_select_id" aria-label="status_id" {!!  ((isset($item)) && (Helper::checkIfRequired($item, $fieldname))) ? ' data-validation="required" required' : '' !!}{{ (isset($multiple) && ($multiple=='true')) ? " multiple='multiple'" : '' }}>
                   <option value=""  role="option">{{ trans('general.select_status') }}</option>    
               </select>
             </div>
           </div>
             <!-- Checkout selector -->
          @include ('partials.forms.checkout-selector', ['user_select' => 'false','asset_select' => 'true', 'location_select' => 'true'])

          {{-- Disable checkout to users - @DarthKillian --}}
          {{-- @include ('partials.forms.edit.user-select', ['translated_name' => trans('general.user'), 'fieldname' => 'assigned_user']) --}}
          @include ('partials.forms.edit.asset-select', ['translated_name' => trans('general.asset'), 'asset_selector_div_id' => 'assigned_asset', 'fieldname' => 'assigned_asset', 'unselect' => 'true', 'style' => 'display:none;'])
          @include ('partials.forms.edit.location-select', ['translated_name' => trans('general.location'), 'fieldname' => 'assigned_location'])

          <!-- Checkout/Checkin Date -->
              <div class="form-group {{ $errors->has('checkout_at') ? 'error' : '' }}">
                  <label for="checkout_at" class="col-sm-3 control-label">
                      {{ trans('admin/hardware/form.checkout_date') }}
                  </label>
                  <div class="col-md-8">
                      <div class="input-group date col-md-5" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-end-date="0d" data-date-clear-btn="true">
                          <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="checkout_at" id="checkout_at" value="{{ old('checkout_at') }}">
                          <span class="input-group-addon"><x-icon type="calendar" /></span>
                      </div>
                      {!! $errors->first('checkout_at', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
                  </div>
              </div>

              <!-- Expected Checkin Date -->
              {{-- Disabling expected check in as we don't use that --}}
              {{-- @DarthKillian --}}
              {{-- <div class="form-group {{ $errors->has('expected_checkin') ? 'error' : '' }}">
                  <label for="expected_checkin" class="col-sm-3 control-label">
                      {{ trans('admin/hardware/form.expected_checkin') }}
                  </label>
                  <div class="col-md-8">
                      <div class="input-group date col-md-5" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="0d" data-date-clear-btn="true">
                          <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="expected_checkin" id="expected_checkin" value="{{ old('expected_checkin') }}">
                          <span class="input-group-addon"><x-icon type="calendar" /></span>
                      </div>
                      {!! $errors->first('expected_checkin', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
                  </div>
              </div> --}}


          <!-- Note -->
          <div class="form-group {{ $errors->has('note') ? 'error' : '' }}">
              <label for="note" class="col-sm-3 control-label">
                  {{ trans('general.notes') }}
              </label>
            <div class="col-md-8">
              <textarea class="col-md-6 form-control" id="note" name="note">{{ old('note') }}</textarea>
              {!! $errors->first('note', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
            </div>
          </div>
          @include ('partials.forms.edit.asset-select', [
           'translated_name' => trans('general.assets'),
           'fieldname' => 'selected_assets[]',
           'multiple' => true,
           'required' => true,
           'asset_status_type' => 'RTD',
           'select_id' => 'assigned_assets_select',
           'asset_selector_div_id' => 'assets_to_checkout_div',
           'asset_ids' => old('selected_assets')
         ])



      </div> <!--./box-body-->
      <div class="box-footer">
        <a class="btn btn-link" href="{{ URL::previous() }}"> {{ trans('button.cancel') }}</a>
        <button type="submit" class="btn btn-primary pull-right"><x-icon type="checkmark" /> {{ trans('general.checkout') }}</button>
      </div>
    </div>
      </form>
  </div> <!--/.col-md-7-->

  <!-- right column -->
  <div class="col-md-5" id="current_assets_box" style="display:none;">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h2 class="box-title">{{ trans('admin/users/general.current_assets') }}</h2>
      </div>
      <div class="box-body">
        <div id="current_assets_content">
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('moar_scripts')
@include('partials/assets-assigned')
<script nonce="{{ csrf_token() }}">
    $(function () {
        //if there's already a user selected, make sure their checked-out assets show up
        // (if there isn't one, it won't do anything)
        $('#assigned_user').change();
    });
</script>

@stop
