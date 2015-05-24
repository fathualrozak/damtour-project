@extends('layouts.dashboard')
@section('page_heading','Program')

    @section('section')
        <div>
            <a href="{{ route('program.create') }}" class="btn btn-default"><i class="fa fa-plus-circle"></i> Program Baru</a>
        </div>
        <hr>
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Program</th>
                    <th>Kategori</th>
                    <th>Paket</th>
                    <th>Jadwal</th>
                    <th>Lama Hari</th>
                    <th>Harga</th>
                    <th>DP</th>
                    <th>Batas Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        @foreach($programs as $program)
                <tr>
                    <td>{{ $program->service->name }}</td>
                    <td>{{ $program->name }}</td>
                    <td>{{ $program->programCategory->name }}</td>
                    <td>{{ $program->package->name }}</td>
                    <td>{{ $program->schedule->format('d-M-Y') }}</td>
                    <td>{{ $program->days_length }} Hari</td>
                    <td>{{ formatCurrency($program->currency->name, $program->price) }}</td>
                    <td>{{ formatCurrency($program->currency->name, $program->down_payment) }}</td>
                    <td>{{ $program->payment_before->format('d-M-Y') }}</td>
                    <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['program.destroy', $program->id]]) !!}
                        <a href="{{ route('program.edit', $program->id) }}" class="btn btn-info btn-xs">Edit</a>
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop