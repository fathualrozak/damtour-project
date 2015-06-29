@extends('layouts.dashboard')
@section('page_heading','Staff')

    @section('section')
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-default"><i class="fa fa-plus-circle"></i> Tambah Staff</a>
        </div>
        <hr>
        <table class="table table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
        @foreach($users as $user)
                <tr class="linked-row" route="{{ route('user.show', Hashids::encode($user->id)) }}" token="{{ csrf_token() }}">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}
    @endsection

@stop