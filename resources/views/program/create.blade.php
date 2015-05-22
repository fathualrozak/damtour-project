@extends('layouts.dashboard')
@section('section')

       <div class="col-lg-8 col-lg-offset-2">
           <div class="panel panel-primary">

               <div class="panel-heading">
                   Tambah Program
               </div>
               <div class="panel-body">
               {!! Form::open(array('route' => 'program.store')) !!}
                    @include('program._form')
                    <div class="form-group">
                        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                    </div>
               {!! Form::close() !!}
               </div>

           </div>
       </div>
            
@stop
