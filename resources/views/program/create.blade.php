@extends('layouts.dashboard')
@section('page_heading','Buat Program')
@section('section')

       <div class="col-lg-8 col-lg-offset-2">
           <div class="panel panel-primary">

               <div class="panel-heading">
                    <ul class="list-inline">
                      <li class="col-xs-12">
                        <span class="btn-group pull-right">
                          <a href="{{ route('program.index') }}" class="btn btn-primary"><i class="fa fa-times"></i></a>
                        </span>
                        <h4>Data Program</h4>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
               </div>
               <div class="panel-body">
               {!! Form::open(array('route' => 'program.store', 'id' => 'create-program')) !!}
                    @include('program._form')
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::submit('Buat Program', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
               {!! Form::close() !!}
               </div>

           </div>
       </div>
            
@stop
