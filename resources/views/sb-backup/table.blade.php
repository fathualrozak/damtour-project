@extends('...layouts.dashboard')
@section('page_heading','Program')

    @section('section')
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
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_schedule }}</td>
                    <td>{{ $program->program_days_length }}</td>
                    <td>{{ $program->price }}</td>
                    <td>{{ $program->program_payment_before }}</td>
                    <td>{{ $program->program_description }}</td>
                    <td>{{ $program->program_category_id }}</td>
                    <td>{{ $program->package_id }}</td>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop