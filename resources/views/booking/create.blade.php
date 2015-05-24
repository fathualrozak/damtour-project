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
                   {!! Form::open(array('route' => 'booking.store')) !!}
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
                           {!! Form::label('item_id', 'Layanan lain') !!}
                           {!! Form::select('item_id[]', $items, null, [
                                'class' => 'form-control items-selector',
                                'multiple',
                                'style' => 'width: 100%'
                           ]) !!}
                       </div>

                       <div class="form-group">
                           {!! Form::submit('Booking', ['class' => 'btn btn-success pull-right']) !!}
                       </div>
                   {!! Form::close() !!}
               </div>
               </div>

           </div>
       </div>

@stop