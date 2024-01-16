@extends('layouts/default')

{{-- Page title --}}
@section('title')
RMA Requests
@parent
@stop

@section('header_right')
    @can('create', \App\Models\RMA::class)
        <a href="{{ route('rma.create') }}" accesskey="n" class="btn btn-primary pull-right"> {{ trans('general.create') }}</a>
    @endcan
@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-12">

    <div class="box box-default">
      <div class="box-body">
        <div class="table-responsive">

            <table
                data-columns="{{ \App\Presenters\RMAPresenter::dataTableLayout() }}"
                data-cookie-id-table="rmaRequestsTable"
                data-pagination="true"
                data-id-table="rmaRequestsTable"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-show-fullscreen="true"
                data-show-export="true"
                data-show-refresh="true"
                data-show-footer="true"
                data-sort-order="asc"
                id="rmaRequestsTable"
                class="table table-striped snipe-table"
                data-url="{{ route('api.rma.index') }}"
                data-export-options='{
                    "fileName": "export-rma-{{ date('Y-m-d') }}",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('moar_scripts')
@include ('partials.bootstrap-table')
@stop
