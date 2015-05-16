@extends('layouts.dashboard')
@section('page_heading','Program')

    @section('section')
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Address</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
        @foreach($programs as $program)
                <tr>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                    <td>{{ $program->program_name }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop