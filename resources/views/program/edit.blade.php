@extends('layouts.dashboard')
@section('page_heading','Edit Program')
@section('section')

       <div class="col-lg-8 col-lg-offset-2">
           <div class="panel panel-primary">

               <div class="panel-heading">
                   Edit Data Program
               </div>
               <div class="panel-body">
               {!! Form::model($program, ['method' => 'PATCH', 'route' => ['program.update', $program->id], 'id' => 'edit-program'] ) !!}
                    @include('program._form')
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('program.index') }}" class="btn btn-warning">Batal</a>
                        </div>
                    </div>
               {!! Form::close() !!}
               </div>

           </div>
       </div>

@stop
