@extends('layouts.dashboard')
@section('page_heading','Payments')

    @section('section')
        <div>
            <a href="{{ route('payment.create') }}" class="btn btn-default"><i class="fa fa-plus-circle"></i> Pembayaran</a>
        </div>
        <hr>
        <table class="table table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                    <th>Penyetor</th>
                    <th>No. Invoice</th>
                    <th>Cara Bayar</th>
                    <th>Status</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
        @foreach($payments as $payment)
                <tr class="linked-row" route="{{ route('user.show', Hashids::encode($payment->id)) }}" token="{{ csrf_token() }}">
                    <td>{{ $payment->date }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->payer->name }}</td>
                    <td>{{ $payment->invoice->code }}</td>
                    <td>{{ $payment->paymentMethod->name }}</td>
                    <td>{{ $payment->paymentStatus->name }}</td>
                    <td>{{ $payment->user->name }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>
        {!! $payments->render() !!}
    @endsection

@stop