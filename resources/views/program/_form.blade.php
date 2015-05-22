<div class="form-group">
    {!! Form::label('name', 'Nama Program') !!}
    {!! Form::text('name', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('service_id', 'Layanan') !!}
    {!! Form::select('service_id', $services, null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('program_category_id', 'Kategori') !!}
    {!! Form::select('program_category_id', $categories, null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('package_id', 'Paket') !!}
    {!! Form::select('package_id', $packages, null, array('class' => 'form-control')) !!}
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
    {!! Form::select('currency_id', $currencies, null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('payment-before', 'Batas Lunas') !!}
    {!! Form::input('date', 'payment_before', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('payment-before', 'Keterangan') !!}
    {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
</div>
<hr>

