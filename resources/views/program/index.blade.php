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
                    <th>Kategori</th>
                    <th>Paket</th>
                    <th>Jadwal</th>
                    <th>Lama Hari</th>
                    <th>Harga</th>
                    <th>Batas Pembayaran</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        @foreach($programs as $program)
                <tr>
                    <td>{{ $program->name }}</td>
                    <td>{{ $program->programCategory->name }}</td>
                    <td>{{ $program->package->name }}</td>
                    <td>{{ $program->schedule }}</td>
                    <td>{{ $program->days_length }} Hari</td>
                    <td>{{ $program->price }}</td>
                    <td>{{ $program->payment_before }}</td>
                    <td>{{ $program->description }}</td>
                    <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['program.destroy', $program->id]]) !!}
                        <a href="{{ route('program.edit', $program->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </td>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop