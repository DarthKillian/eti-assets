@extends('layouts/edit-form', [
    'createText' => 'Create RMA Request',
    'updateText' => 'Update RMA',
    'topSubmit' => true,
    'helpText' => trans('help.rma'),
    'helpPosition' => 'right',
    'formAction' => ($item->id) ? route('rma.update', ['id' => $item->id]) : route('rma.store'),
])

{{-- Page content --}}
@section('inputFields')
@include ('partials.forms.edit.asset-select', ['translated_name' => trans('admin/hardware/table.asset_tag'), 'fieldname' => 'asset_id', 'required' => 'true'])
<!-- Notes -->
<div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }}">
    <label for="notes" class="col-md-3 control-label">{{ trans('admin/rma/form.notes') }}</label>
    <div class="col-md-8 {{ Helper::checkIfRequired($item, 'notes') ? ' required' : '' }}">
      <textarea class="col-md-6 form-control" id="notes" name="notes">{{ old('notes', $item->notes) }}</textarea>
      {!! $errors->first('notes', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
  </div>
</div> <!-- .box-body -->

<!-- technician -->
<div class="form-group {{ $errors->has('technician') ? ' has-error' : '' }}">
    <label for="technician" class="col-md-3 control-label">
      {{ trans('admin/rma/form.technician') }}
    </label>
    <div class="col-md-7{{  (Helper::checkIfRequired($item, 'technician')) ? ' required' : '' }}">
      <input class="form-control" type="text" name="technician" id="technician" value="{{ old('technician', $item->technician) }}" />
      {!! $errors->first('technician', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
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
  @if(isset($item->id))
    <!-- Completion Date -->
    <div class="form-group {{ $errors->has('completion_date') ? ' has-error' : '' }}">
        <label for="start_date" class="col-md-3 control-label">{{ trans('admin/rma/form.completion_date') }}</label>

        <div class="input-group col-md-3{{  (Helper::checkIfRequired($item, 'completion_date')) ? ' required' : '' }}">
          <div class="input-group date" data-date-clear-btn="true" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="completion_date" id="completion_date" value="{{ old('completion_date', $item->completion_date) }}">
            <span class="input-group-addon"><i class="fas fa-calendar" aria-hidden="true"></i></span>
          </div>
          {!! $errors->first('completion_date', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
        </div>
    </div>
    {{-- RMA Request Status --}}
    @include('partials.forms.edit.rma_status', ['status' => $item->status])

@endif
{{-- Display notification option if the route is create. I may add a way to send a notification on an update but I don't think that's needed right now --}}
@if(Route::is('rma.create'))
    <div class="form-group">
        <div class="col-md-7 col-md-offset-3">
            <label for="notify" class="form-control">
                <input type="checkbox" value="1" name="notify" checked aria-label="notify">
                {{ trans('general.rma_notify') }}
            </label>
            <p class="help-block">{{ trans('general.rma_notify_help') }}
            </p>
        </div>
    </div>
@endif


@stop