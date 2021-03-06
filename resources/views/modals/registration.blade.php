<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrationModal">Registrasi Jamaah</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
            {!! Form::open(array('route' => 'api.jamaah.store', 'id' => 'form-reg-jamaah')) !!}
                @include('...jamaah._form')
            {!! Form::close() !!}
        </div>
      </div>
      <div class="modal-footer">
            <button id="btn-store-jamaah" class="btn btn-primary">Daftar</button>
      </div>
    </div>
  </div>
</div>