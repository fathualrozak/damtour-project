<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('date', 'Tanggal') !!}
        {!! Form::input('date', 'date', \Carbon\Carbon::now()->format('Y-m-d'), array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('invoice_id', 'Invoice') !!}
        {!! Form::select('invoice_id', [], null, [
            'class' => 'form-control invoice-selector',
            'style' => 'width: 100%'
        ]) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('amount', 'Nominal') !!}
        {!! Form::input('number', 'amount', null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('currency_id', 'Mata Uang') !!}
        {!! Form::select('currency_id', $currencies, null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('payer_name', 'Penyetor') !!}
        {!! Form::text('payer_name', null, [
            'class' => 'form-control',
            ]) !!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('payer_contact', 'Kontak') !!}
        {!! Form::text('payer_contact', null, [
            'class' => 'form-control',
            ]) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('payment_method_id', 'Cara Bayar') !!}
        {!! Form::select('payment_method_id', $paymentMethod, null, array('class' => 'form-control')) !!}
    </div>
</div>


