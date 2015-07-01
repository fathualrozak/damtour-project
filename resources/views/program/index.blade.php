{{--{{ dd($programs) }}--}}

@extends('layouts.dashboard')
@section('page_heading','Program')

    @section('section')
        <div class="custom-toolbar">
            <a href="{{ route('program.create') }}" class="btn btn-default"><i class="fa fa-plus-circle fa-fw"></i> Buat Program</a>
        </div>
        <table id="table-program" data-edit-route="{!! route('program.index') !!}"
                data-toggle="table"
                data-url="{{ route('api.program.index') }}"
                data-ajax="programAjax"
                data-sort-name="service"
                data-show-toggle="true"
                data-search="true"
                data-toolbar=".custom-toolbar"
                data-pagination="true"
                data-show-refresh="true"
                data-row-style=""
                data-locale="id-ID">
            <thead>
            <tr>
                <th data-field="operate" data-align="center" data-formatter="programOperateFormatter"></th>
                <th data-field="service" data-align="center" data-sortable="true">Layanan</th>
                <th data-field="name" data-align="left" data-sortable="true">Nama Program</th>
                <th data-field="category" data-align="left" data-sortable="true">Kategori</th>
                <th data-field="package" data-align="left" data-sortable="true">Paket</th>
                <th data-field="schedule" data-align="right" data-sortable="true">Jadwal</th>
                <th data-field="schedule_end" data-align="right" data-sortable="true">Berakhir</th>
                <th data-field="price" data-align="right" data-sortable="true">Harga</th>
                <th data-field="booked" data-align="center" data-sortable="true" data-class="success">Di Booking</th>
            </tr>
            </thead>
        </table>

    @endsection

@stop