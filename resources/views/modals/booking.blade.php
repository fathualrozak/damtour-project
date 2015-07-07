<div class="modal fade" id="bookingModal" role="dialog" aria-labelledby="bookingModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registrationModal">Booking Program</h4>
      </div>
          <div class="modal-body">
                <div class="col-md-12">
                    {!! Form::open(array('route' => 'booking.store')) !!}
                           <input type="hidden" id="jamaah_api_route" value="{{ route('api.jamaah.index') }}">
                           <input type="hidden" id="program_api_route" value="{{ route('api.program.index') }}">
                           <input type="hidden" id="network_api_route" value="{{ route('api.network.index') }}">
                           <div class="form-group">
                               {!! Form::label('jamaah_id', 'Jamaah') !!}
                               {!! Form::select('jamaah_id', [], null, [
                                    'class' => 'form-control jamaah-selector',
                                    'style' => 'width: 100%'
                               ]) !!}
                           </div>

                       <div class="form-group">
                           {!! Form::label('program_id', 'Program') !!}
                           {!! Form::select('program_id', [], null, [
                                'class' => 'form-control program-selector',
                                'style' => 'width: 100%'
                           ]) !!}
                       </div>

                       <div class="form-group">
                          {!! Form::label('sponsor_id', 'Sponsor') !!}
                          {!! Form::select('sponsor_id', [], null, [
                               'class' => 'form-control sponsor-selector',
                               'style' => 'width: 100%'
                          ]) !!}
                       </div>

                    {!! Form::close() !!}
                </div>
          </div>
      <div class="modal-footer">
            {!! Form::submit('Booking', ['class' => 'btn btn-primary']) !!}
      </div>
    </div>
  </div>
</div>