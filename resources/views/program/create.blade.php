@extends('layouts.dashboard')
@section('section')

           <div class="col-lg-8 col-lg-offset-2">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       Tambah Program
                   </div>
                   <div class="panel-body">
                        {!! Form::open(array('route' => 'program.store')) !!}

                            <div class="form-group">
                                {!! Form::label('name', 'Nama Program') !!}
                                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('service_id', 'Layanan') !!}
                                <select name="service_id" class="form-control">
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">
                                        {{ $service->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {!! Form::label('program_category_id', 'Kategori') !!}
                                <select name="program_category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {!! Form::label('package_id', 'Paket') !!}
                                <select name="package_id" class="form-control">
                                    @foreach($packages as $package)
                                        <option value="{{ $package->id }}">
                                        {{ $package->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                {!! Form::label('schedule', 'Tanggal Keberangkatan') !!}
                                {!! Form::input('date', 'schedule', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('days-length', 'Jumlah Hari') !!}
                                {!! Form::input('number', 'days_length', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('price', 'Harga') !!}
                                {!! Form::input('number', 'price', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('currency_id', 'Mata Uang') !!}
                                <select name="currency_id" class="form-control">
                                    @foreach($currencies as $currency)
                                        <option value="{{ $currency->id }}">
                                        {{ strtoupper($currency->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {!! Form::label('payment-before', 'Batas Lunas') !!}
                                {!! Form::input('date', 'payment_before', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('payment-before', 'Keterangan') !!}
                                {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                            </div>

                        {!! Form::close() !!}
                   </div>
                   <div class="panel-footer">

                   </div>
               </div>
           </div>
            
@stop
