@extends('layouts.dashboard')
@section('page_heading', 'Edit Data Jamaah')
@section('section')

       <div class="col-lg-8 col-lg-offset-2">
           <div class="panel panel-primary">

               <div class="panel-heading">
                   <ul class="list-inline">
                    <li class="col-xs-12">
                      <span class="btn-group pull-right">
                        <a href="{{ route('jamaah.show', Hashids::encode($jamaah->id)) }}" class="btn btn-primary"><i class="fa fa-times"></i></a>
                      </span>
                      <h4>{{ $jamaah->firstname.' '.$jamaah->lastname }}</h4>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <div class="panel-body">
               <div class="col-md-10 col-md-offset-1">
                   {!! Form::model($jamaah, array('method' => 'PATCH', 'route' => ['jamaah.update', Hashids::encode($jamaah->id) ])) !!}
                        @include('jamaah._form')
                        <div class="form-group">
                            <a href="{{ route('jamaah.show', Hashids::encode($jamaah->id)) }}" class="btn btn-warning">Cancel</a>
                            {!! Form::submit('Update', ['class' => 'btn btn-success pull-right']) !!}
                        </div>
                   {!! Form::close() !!}
               </div>
               </div>

           </div>
       </div>

@stop
