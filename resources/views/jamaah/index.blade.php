@extends('layouts.dashboard')
@section('page_heading','Jamaah')

    @section('section')
        <div>
            <a href="{{ route('jamaah.create') }}" class="btn btn-default"><i class="fa fa-plus-circle"></i> Registrasi</a>
        </div>
        <hr>
        <table class="table table-condensed table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kontak</th>
                    <th>Email</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
        @foreach($jamaah as $jamaah)
                <tr class="linked-row" route="{{ route('jamaah.show', Hashids::encode($jamaah->id)) }}" token="{{ csrf_token() }}">
                    <td>{{ $jamaah->firstname }} {{ $jamaah->lastname }}</td>
                    <td>{{$properties['genders'][$jamaah->gender] }}</td>
                    <td>{{ $jamaah->contact }}</td>
                    <td>{{ $jamaah->email }}</td>
                    <td>{{ $jamaah->address->district->name }} - {{ $jamaah->address->city->name }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop