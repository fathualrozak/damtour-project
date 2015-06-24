@extends('layouts.dashboard')
@section('section')

       <div class="col-lg-8 col-lg-offset-2">
           <div class="panel panel-primary">

               <div class="panel-heading">
                   <ul class="list-inline">
                       <li class="col-xs-12">
                         <span class="btn-group pull-right">
                           <a href="{{ route('payment.index') }}" class="btn btn-primary"><i class="fa fa-times"></i></a>
                         </span>
                         <h4>Pembayaran</h4>
                       </li>
                     </ul>
                     <div class="clearfix"></div>
               </div>
               <div class="panel-body">
               <div class="col-md-10 col-md-offset-1">
                   {!! Form::open(array('route' => 'payment.store')) !!}
                        @include('payment._form')
                       <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::submit('Bayar', ['class' => 'btn btn-primary']) !!}
                            </div>
                       </div>
                   {!! Form::close() !!}
               </div>
               </div>

           </div>
       </div>

@stop
