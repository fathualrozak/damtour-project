@extends('layouts.dashboard')
@section('page_heading','Invoice')

    @section('section')
        <table class="table table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th>Kode Invoice</th>
                    <th>Tanggal</th>
                    <th>Tipe</th>
                    <th>Jamaah</th>
                    <th>Kode Booking</th>
                    <th>Nominal</th>
                </tr>
            </thead>
            <tbody>
        @foreach($invoices as $invoice)
                <tr class="linked-row" route="{{ route('invoice.show', $invoice->code) }}">
                    <td>{{ chunk_split($invoice->code, 4) }}</td>
                    <td>{{ $invoice->date->format('d/m/Y') }}</td>
                    <td>{{ $invoice->invoiceType->name }} <code>[{{ $invoice->invoiceType->code }}]</code></td>
                    <td>{{ $invoice->jamaah->firstname }} {{ $invoice->jamaah->lastname }}</td>
                    <td>{{ chunk_split($invoice->booking->code, 4) }}</td>
                    <td>
                    @if($invoice->invoiceType->code == 'dp')
                        {{ formatCurrency($invoice->booking->program->currency->name, $invoice->booking->program->down_payment) }}
                    @elseif($invoice->invoiceType->code== 'pl')
                        {{ formatCurrency($invoice->booking->program->currency->name, $invoice->booking->program->pelunasan) }}
                    @endif
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
    @endsection

@stop