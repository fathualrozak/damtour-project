@extends('layouts.dashboard')
@section('page_heading','Booking')

    @section('section')
        <div>
            <a href="{{ route('booking.create') }}" class="btn btn-default"><i class="fa fa-plus-circle"></i> Booking</a>
        </div>
        <hr>
        <table class="table table-condensed table-striped table-hover">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Jamaah</th>
                    <th>Program</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
        @foreach($bookings as $booking)
                <tr class="linked-row" route="{{ route('booking.show', $booking->code) }}">
                    <td>{{ $booking->code }}</td>
                    <td>{{ $booking->jamaah->firstname }} {{ $booking->jamaah->lastname }}</td>
                    <td>{{ $booking->program->name }}</td>
                    <td>{{ $booking->date }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>

    @endsection

@stop