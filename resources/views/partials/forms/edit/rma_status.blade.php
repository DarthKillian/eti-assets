          <!-- Improvement Type -->
          <div class="form-group {{ $errors->has('rma_status') ? ' has-error' : '' }}">
              <label for="rma_status" class="col-md-3 control-label">{{ trans('admin/rma/form.rma_status') }}
              </label>
              <div class="col-md-4{{  (Helper::checkIfRequired($item, 'rma_status')) ? ' required' : '' }}">
                  {{ Form::select('rma_status', $rma_status , old('rma_status', $rma_status[$status]), ['class'=>'select2', 'style'=>'min-width:350px', 'aria-label'=>'rma_status']) }}
                  {!! $errors->first('rma_status', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
              </div>
          </div>
