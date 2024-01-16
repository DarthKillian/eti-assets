@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ trans('admin/rma/general.view') . $rma->asset->serial }}
    @parent
@stop

{{-- Page content --}}
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                {{-- <ul class="nav nav-tabs">

                    <li class="active">
                        <a href="#details" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                          <i class="fas fa-info-circle fa-2x"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('admin/users/general.info') }}</span>
                        </a>
                    </li>

                    <li>
                        <a href="#software" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                            <i class="far fa-save fa-2x" aria-hidden="true"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('general.licenses') }}
                            {!! ($asset->licenses->count() > 0 ) ? '<badge class="badge badge-secondary">'.number_format($asset->licenses->count()).'</badge>' : '' !!}
                          </span>
                        </a>
                    </li>

                    <li>
                        <a href="#components" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                            <i class="far fa-hdd fa-2x" aria-hidden="true"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('general.components') }}
                            {!! ($asset->components->count() > 0 ) ? '<badge class="badge badge-secondary">'.number_format($asset->components->count()).'</badge>' : '' !!}
                          </span>
                        </a>
                    </li>

                    <li>
                        <a href="#assets" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                            <i class="fas fa-barcode fa-2x" aria-hidden="true"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('general.assets') }}
                            {!! ($asset->assignedAssets()->count() > 0 ) ? '<badge class="badge badge-secondary">'.number_format($asset->assignedAssets()->count()).'</badge>' : '' !!}
                            
                          </span>
                        </a>
                    </li>

                
                    <li>
                        <a href="#history" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                            <i class="fas fa-history fa-2x" aria-hidden="true"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('general.history') }}
                          </span>
                        </a>
                    </li>

                    <li>
                        <a href="#maintenances" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                            <i class="fas fa-wrench fa-2x" aria-hidden="true"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('general.maintenances') }}
                            {!! ($asset->assetmaintenances()->count() > 0 ) ? '<badge class="badge badge-secondary">'.number_format($asset->assetmaintenances()->count()).'</badge>' : '' !!}
                          </span>
                        </a>
                    </li>

                    <li>
                        <a href="#files" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                            <i class="far fa-file fa-2x" aria-hidden="true"></i>
                          </span>
                          <span class="hidden-xs hidden-sm">{{ trans('general.files') }}
                            {!! ($asset->uploads->count() > 0 ) ? '<badge class="badge badge-secondary">'.number_format($asset->uploads->count()).'</badge>' : '' !!}
                          </span>
                        </a>
                    </li>

                    <li>
                    <a href="#modelfiles" data-toggle="tab">
                          <span class="hidden-lg hidden-md">
                              <i class="fa-solid fa-laptop-file fa-2x" aria-hidden="true"></i>
                          </span>
                        <span class="hidden-xs hidden-sm">
                            {{ trans('general.additional_files') }}
                            {!! ($asset->model) && ($asset->model->uploads->count() > 0 ) ? '<badge class="badge badge-secondary">'.number_format($asset->model->uploads->count()).'</badge>' : '' !!}
                          </span>
                    </a>
                    </li>

                   
                    @can('update', \App\Models\Asset::class)
                        <li class="pull-right">
                            <a href="#" data-toggle="modal" data-target="#uploadFileModal">
                                <i class="fas fa-paperclip" aria-hidden="true"></i>
                                {{ trans('button.upload') }}
                            </a>
                        </li>
                    @endcan


                </ul> --}}
                
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="details">
                        <div class="row">
                            <div class="col-md-8">

                                <!-- start striped rows -->
                                <div class="container row-striped">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                {{ trans('admin/rma/general.rma_status') }}
                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            @if ($rma->status == 'Pending')
                                                <span class="text-orange">
                                                    <i class="fas fa-question-circle"></i>
                                                    {{ $rma->status }}
                                                </span>
                                            @endif
                                            @if (str_contains($rma->status, "RMA Approved"))
                                                <span class="text-success">
                                                    <i class="fas fa-check-square"></i>
                                                    {{ $rma->status }}
                                                </span>
                                            @endif
                                            @if ($rma->status == "RMA Out for Repair")
                                                <span class="text-blue">
                                                    <i class="fas fa-wrench"></i>
                                                    {{ $rma->status }}
                                                </span>
                                            @endif
                                            @if ($rma->status == "RMA Complete")
                                                <span class="text-green">
                                                    <i class="fas fa-exchange"></i>
                                                    {{ $rma->status }}
                                                </span>
                                            @endif
                                            @if ($rma->status == "RMA Declined")
                                                <span class="text-danger">
                                                    <i class="fas fa-ban"></i>
                                                    {{ $rma->status }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                {{ trans('admin/rma/general.asset') }}
                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('hardware.show', $rma->asset_id) }}">{{ $rma->asset->serial }} ({{ $rma->asset->asset_tag }})</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                {{ trans('admin/rma/general.company') }}
                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ $rma->asset->company->name }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>
                                                {{ trans('admin/rma/general.manufacturer') }}
                                            </strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ $rma->asset->model->manufacturer->name }}
                                        </div>
                                    </div>
                                    @if (isset($rma->new_asset_id))
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    {{ trans('admin/rma/general.new_asset') }}
                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('hardware.show', $rma->new_asset_id) }}">{{ $rma->newAsset->serial }} ({{ $rma->newAsset->asset_tag }})</a>
                                            </div>
                                        </div>
                                    @endif
                                    @if (isset($rma->rma_number))
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    {{ trans('admin/rma/general.rma_number') }}
                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                {{ $rma->rma_number }}
                                            </div>
                                        </div>
                                    @endif
                                    @if (isset($rma->case_number))
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>
                                                    {{ trans('admin/rma/general.case_number') }}
                                                </strong>
                                            </div>
                                            <div class="col-md-6">
                                                {{ $rma->case_number }}
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.notes') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {!! nl2br(Helper::parseEscapedMarkedownInline($rma->notes)) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.requestor') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ $rma->users->first_name . " " . $rma->users->last_name }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.technician') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ $rma->technician }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.start_date') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ Helper::getFormattedDateObject($rma->start_date, 'date', false) }}
                                        </div>
                                    </div>
                                    @if (isset($rma->completion_date))
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>{{ trans('admin/rma/general.completion_date') }}</strong>
                                            </div>
                                            <div class="col-md-6">
                                                {{ Helper::getFormattedDateObject($rma->completion_date, 'date', false) }}
                                            </div>
                                        </div>
                                    @endif
                                    @if (isset($rma->repair_cost))
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>{{ trans('admin/rma/general.repair_cost') }}</strong>
                                            </div>
                                            <div class="col-md-6">
                                                ${{ $rma->repair_cost }}
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.with_admin') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {!! ($rma->with_admin=='1') ? '<i class="fas fa-check text-success" aria-hidden="true"></i> '.trans('general.yes') : '<i class="fas fa-times text-danger" aria-hidden="true"></i> '.trans('general.no')  !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.warranty_expired') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {!! ($rma->warranty_expired=='1') ? '<i class="fas fa-exclamation-triangle text-danger" aria-hidden="true"></i> '.trans('general.yes') : '<i class="fas fa-thumbs-up text-success" aria-hidden="true"></i> '.trans('general.no')  !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.created_at') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ Helper::getFormattedDateObject($rma->created_at, 'datetime', false) }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <strong>{{ trans('admin/rma/general.updated_at') }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            {{ Helper::getFormattedDateObject($rma->updated_at, 'datetime', false) }}
                                        </div>
                                    </div>
                                    
                                </div> <!-- end row-striped -->

                            </div><!-- /col-md-8 -->

                            <div class="col-md-4">
                                <!-- Start side button column -->

                                

                                @can('update', $rma)
                                    <div class="col-md-12" style="padding-top: 5px;">
                                        <a href="{{ route('rma.edit', $rma->id) }}" style="width: 100%;" class="btn btn-sm btn-primary hidden-print">
                                            {{ trans('admin/rma/general.edit') }}
                                        </a>
                                    </div>
                                @endcan
                                @can('delete', $rma)
                                    <div class="col-md-12" style="padding-top: 30px; padding-bottom: 30px;">
                                        <button class="btn btn-block btn-danger delete-rma" data-toggle="modal" data-title="{{ trans('general.delete') }}" data-content="{{ trans('general.sure_to_delete', ['item' => $rma->asset->serial]) }}" data-target="#dataConfirmModal">{{ trans('general.delete') }} </button>
                                        <span class="sr-only">{{ trans('general.delete') }}</span>
                                    </div>
                                @endcan

                                {{-- @can('create', $asset)
                                    <div class="col-md-12" style="padding-top: 5px;">
                                        <a href="{{ route('clone/hardware', $asset->id) }}" style="width: 100%;" class="btn btn-sm btn-primary hidden-print">
                                            {{ trans('admin/hardware/general.clone') }}
                                        </a>
                                    </div>
                                @endcan

                                @can('audit', \App\Models\Asset::class)
                                    <div class="col-md-12" style="padding-top: 5px;">
                                        <a href="{{ route('asset.audit.create', $asset->id)  }}" style="width: 100%;" class="btn btn-sm btn-primary hidden-print">
                                            {{ trans('general.audit') }}
                                        </a>
                                    </div>
                                @endcan

                                @can('delete', $asset)
                                    @if ($asset->deleted_at=='')
                                        <div class="col-md-12" style="padding-top: 30px; padding-bottom: 30px;">
                                            <button class="btn btn-block btn-danger delete-asset" data-toggle="modal" data-title="{{ trans('general.delete') }}" data-content="{{ trans('general.sure_to_delete', ['item' => $asset->asset_tag]) }}" data-target="#dataConfirmModal">{{ trans('general.delete') }} </button>
                                            <span class="sr-only">{{ trans('general.delete') }}</span>
                                        </div>
                                    @endif
                                @endcan --}}
                            </div> <!-- div.col-md-4 -->
                        </div><!-- /row -->
                    </div><!-- /.tab-pane asset details -->
        </div> <!-- /. col-md-12 -->
    </div> <!-- /. row -->
@stop

@section('moar_scripts')
    <script>
        $('#dataConfirmModal').on('show.bs.modal', function (event) {
            var content = $(event.relatedTarget).data('content');
            var title = $(event.relatedTarget).data('title');
            $(this).find(".modal-body").text(content);
            $(this).find(".modal-header").text(title);
        });

    </script>
    @include ('partials.bootstrap-table')

@stop
