@extends('layouts.dashboard')
@section('section')

       <div class="col-lg-8 col-lg-offset-2">
           <div class="panel panel-primary">

               <div class="panel-heading">
                   <ul class="list-inline">
                       <li class="col-xs-12">
                         <span class="btn-group pull-right">
                           <a href="{{ route('booking.index') }}" class="btn btn-primary"><i class="fa fa-times"></i></a>
                         </span>
                         <h4>Booking Form</h4>
                       </li>
                     </ul>
                     <div class="clearfix"></div>
               </div>
               <div class="panel-body">
               <div class="col-md-10 col-md-offset-1">
                   {!! Form::open(array('route' => 'program.store')) !!}
                       <div id="jamaah-select-group" class="form-group">
                           {!! Form::select('booking', getProperties()['educations'], null, [
                                'id' => 'jamaah-select',
                                'class' => 'selectpicker',
                                'data-live-search' => 'true',
                                'data-size' => '5'
                           ]) !!}
                       </div>
                       <div class="form-group">
                           {!! Form::submit('Booking', ['class' => 'btn btn-primary']) !!}
                       </div>
                   {!! Form::close() !!}
               </div>
               </div>

           </div>
       </div>

@stop
