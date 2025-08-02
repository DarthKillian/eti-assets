@extends('layouts/edit-form', [
    'createText' => 'Create RMA Request',
    'updateText' => 'Update RMA',
    'topSubmit' => (Route::is('rma.create')) ? false : true,
    'newAsset' => (Route::is('rma.create')) ? true : false,
    'helpText' => trans('help.rma'),
    'helpPosition' => 'right',
    'formAction' => ($item->id) ? route('rma.update', ['id' => $item->id]) : route('rma.store'),
])

{{-- Page content --}}
@section('inputFields')

  {{-- Asset select --}}
    @include ('partials.forms.edit.asset-select', ['translated_name' => trans('admin/rma/form.asset'), 'fieldname' => 'asset_id', 'required' => 'true'])

  <!-- Notes -->
  <div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }}">
    <label for="notes" class="col-md-3 control-label">{{ trans('admin/rma/form.notes') }}</label>
    <div class="col-md-8 {{ Helper::checkIfRequired($item, 'notes') ? ' required' : '' }}">
      <textarea class="col-md-6 form-control" id="notes" name="notes">{{ old('notes', $item->notes) }}</textarea>
      {!! $errors->first('notes', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
  </div>
</div> <!-- .box-body -->


  <!-- contact -->
  <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
    <label for="contact" class="col-md-3 control-label">
      {{ trans('admin/rma/form.contact') }}
    </label>
    <div class="col-md-8{{  (Helper::checkIfRequired($item, 'contact')) ? ' required' : '' }}">
      <input class="form-control" type="text" name="contact" class="col-md-6 form-control" id="contact" value="{{ old('contact', $item->contact) }}" />
      {!! $errors->first('contact', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
  </div>


  @if(isset($item->id))
    {{-- RMA Request Status --}}
    @include('partials.forms.edit.rma_status', ['status' => $item->status])

    <!-- RMA Number -->
    <div class="form-group {{ $errors->has('rma_number') ? ' has-error' : '' }}">
      <label for="rma_number" class="col-md-3 control-label">
        {{ trans('admin/rma/form.rma_number') }}
      </label>
      <div class="col-md-2{{  (Helper::checkIfRequired($item, 'rma_number')) ? ' required' : '' }}">
        <input class="form-control" type="text" name="rma_number" class="col-md-6 form-control" id="rma_number" value="{{ old('rma_number', $item->rma_number) }}" />
        {!! $errors->first('rma_number', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
      </div>
    </div>

    <!-- Case Number -->
    <div class="form-group {{ $errors->has('case_number') ? ' has-error' : '' }}">
      <label for="case_number" class="col-md-3 control-label">
        {{ trans('admin/rma/form.case_number') }}
      </label>
      <div class="col-md-2{{  (Helper::checkIfRequired($item, 'case_number')) ? ' required' : '' }}">
        <input class="form-control" type="text" name="case_number" class="col-md-6 form-control" id="case_number" value="{{ old('case_number', $item->case_number) }}" />
        {!! $errors->first('case_number', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
      </div>
    </div>

    <!-- Start Date -->
    <div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
      <label for="start_date" class="col-md-3 control-label">{{ trans('admin/rma/form.start_date') }}</label>
      <div class="input-group col-md-3{{  (Helper::checkIfRequired($item, 'start_date')) ? ' required' : '' }}">
        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true" data-date-clear-btn="true">
          <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="start_date" id="start_date" value="{{ old('start_date', $item->start_date) }}">
          <span class="input-group-addon"><i class="fas fa-calendar" aria-hidden="true"></i></span>
        </div>
        {!! $errors->first('start_date', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
      </div>
    </div>

    <!-- Completion Date -->
    <div class="form-group {{ $errors->has('completion_date') ? ' has-error' : '' }}">
        <label for="start_date" class="col-md-3 control-label">{{ trans('admin/rma/form.completion_date') }}</label>
        <div class="input-group col-md-3{{  (Helper::checkIfRequired($item, 'completion_date')) ? ' required' : ' required' }}">
          <div class="input-group date" data-date-clear-btn="true" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="completion_date" id="completion_date" value="{{ old('completion_date', $item->completion_date) }}">
            <span class="input-group-addon"><i class="fas fa-calendar" aria-hidden="true"></i></span>
          </div>
          {!! $errors->first('completion_date', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
        </div>
    </div>

    {{-- With Admin --}}
    <div class="form-group">
      <div class="col-md-7 col-md-offset-3">
          <label for="with_admin" class="form-control">
              <input type="checkbox" name="with_admin" {{ (old('with_admin', $item->with_admin)) == '1' ? ' checked="checked"' : '' }} aria-label="with_admin">
              {{ trans('admin/rma/form.with_admin') }}
          </label>
          <p class="help-block">{{ trans('general.rma_with_admin_help') }}
          </p>
      </div>
    </div>  
      
    {{-- Warranty Expired --}}
    <div class="form-group">
        <div class="col-md-7 col-md-offset-3">
            <label for="warranty_expired" class="form-control">
                <input type="checkbox" name="warranty_expired" {{ (old('warranty_expired', $item->warranty_expired)) == '1' ? ' checked="checked"' : '' }} aria-label="warranty_expired">
                {{ trans('admin/rma/form.warranty_expired') }}
            </label>
        </div>
      </div>

  {{-- Repair Cost --}}
    <div class="form-group {{ $errors->has('repair_cost') ? ' has-error' : '' }}">
      <label for="repair_cost" class="col-md-3 control-label">
        {{ trans('admin/rma/form.repair_cost') }}
      </label>
      <div class="col-md-3{{  (Helper::checkIfRequired($item, 'repair_cost')) ? ' required' : '' }}">
        <input class="form-control" type="text" name="repair_cost" id="repair_cost" placeholder="$" value="{{ old('repair_cost', $item->repair_cost) }}" />
        {!! $errors->first('repair_cost', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
      </div>
    </div>
    @include('partials.forms.edit.new-asset-select', ['translated_name' => trans('admin/rma/form.new_asset'), 'fieldname' => 'new_asset_id', 'required' => 'false'])    

  @endif

  {{-- Display notification option if the route is create. I may add a way to send a notification on an update but I don't think that's needed right now --}}
  @if(Route::is('rma.create'))
    <div class="form-group">
        <div class="col-md-7 col-md-offset-3">
            <label for="notify" class="form-control">
                <input type="checkbox" value="1" name="notify" checked aria-label="notify">
                {{ trans('admin/rma/general.rma_notify') }}
            </label>
            <p class="help-block">{{ trans('admin/rma/general.rma_notify_help') }}
            </p>
        </div>
    </div>
      
  @endif

@stop
