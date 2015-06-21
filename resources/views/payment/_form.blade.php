<div class="form-group">
    {!! Form::label('date', 'Tanggal') !!}
    {!! Form::input('date', 'date', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('amount', 'Nominal') !!}
    {!! Form::text('amount', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
   {!! Form::label('invoice_id', 'Invoice') !!}
   {!! Form::select('invoice_id', [], null, [
        'class' => 'form-control invoice-selector',
        'style' => 'width: 100%'
   ]) !!}
</div>
<div class="form-group">
   {!! Form::label('payer_id', 'Penyetor') !!}
   {!! Form::select('payer_id', [], null, [
        'class' => 'form-control payer-selector',
        'style' => 'width: 100%'
   ]) !!}
</div>
<div class="form-group">
    {!! Form::label('currency_id', 'Mata Uang') !!}
    {!! Form::select('currency_id', [], null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('payment_method_id', 'Cara Bayar') !!}
    {!! Form::select('payment_method_id', [], null, array('class' => 'form-control')) !!}
</div>


