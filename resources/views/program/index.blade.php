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
                    <th>Program</th>
                    <th>Jadwal</th>
                    <th>Lama Hari</th>
                    <th>Harga</th>
                    <th>Batas Pembayaran</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Paket</th>
                </tr>
            </thead>
            <tbody>
        @foreach($programs as $program)
                <tr>
                    <td>{{ $program->name }}</td>
                    <td>{{ $program->schedule }}</td>
                    <td>{{ $program->days_length }}</td>
                    <td>{{ $program->price }}</td>
                    <td>{{ $program->payment_before }}</td>
                    <td>{{ $program->description }}</td>
                    <td>{{ $program->kategory->name }}</td>
                    <td>{{ $program->package->name }}</td>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop