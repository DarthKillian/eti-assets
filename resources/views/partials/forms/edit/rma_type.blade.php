          <!-- Improvement Type -->
          <div class="form-group {{ $errors->has('rma_type') ? ' has-error' : '' }}">
              <label for="rma_type" class="col-md-3 control-label">{{ trans('admin/rma/form.rma_type') }}
              </label>
              <div class="col-md-7{{  (Helper::checkIfRequired($item, 'rma_type')) ? ' required' : '' }}">
                  {{ Form::select('rma_type', $status_options , old('rma_type', $status_options), ['class'=>'select2', 'style'=>'min-width:350px', 'aria-label'=>'rma_type']) }}
                  {!! $errors->first('rma_type', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
              </div>
          </div>
