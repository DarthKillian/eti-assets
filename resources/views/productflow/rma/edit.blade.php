@extends('layouts/edit-form', [
    'createText' => 'Create RMA Request',
    'updateText' => 'Update RMA',
    'topSubmit' => true,
    'helpText' => trans('help.rma'),
    'helpPosition' => 'right',
    'formAction' => ($item->id) ? route('rma.update', ['rma' => $item->id]) : route('rma.store'),
])

{{-- Page content --}}
@section('inputFields')
@include ('partials.forms.edit.asset-select', ['translated_name' => trans('admin/hardware/table.asset_tag'), 'fieldname' => 'asset_id', 'required' => 'true'])

@if($item->id == null)
    <div class="form-group">
        <div class="col-md-7 col-md-offset-3">
            <label for="byod" class="form-control">
                <input type="checkbox" value="1" name="notify" checked aria-label="notify">
                {{ trans('general.rma_notify') }}
            </label>
            <p class="help-block">{{ trans('general.rma_notify_help') }}
            </p>
        </div>
    </div>
@else
    @include('partials.forms.edit.rma_type')
@endif
@stop