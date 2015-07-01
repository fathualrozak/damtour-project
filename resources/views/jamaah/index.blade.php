@extends('layouts.dashboard')
@section('page_heading','Jamaah')

    @section('section')
        <div class="custom-toolbar">
            <a href="{{ route('jamaah.create') }}" class="btn btn-default"><i class="fa fa-plus-circle fa-fw"></i> Registrasi</a>
        </div>
        <table id="table-jamaah"
                data-toggle="table"
                data-url="{{ route('api.jamaah.index') }}"
                data-route="{{ route('jamaah.index') }}"
                data-ajax="jamaahAjax"
                data-sort-name="name"
                data-show-toggle="true"
                data-search="true"
                data-toolbar=".custom-toolbar"
                data-pagination="true"
                data-row-style="linked-row"
                data-show-refresh="true"
                data-locale="id-ID">
            <thead>
            <tr>
                {{--<th data-field="operate" data-align="center" data-formatter="jamaahOperateFormatter"></th>--}}
                <th data-field="name" data-align="center" data-sortable="true" data-formatter="jamaahNameFormatter">Nama</th>
                <th data-field="gender" data-align="left" data-sortable="true" data-formatter="jamaahGenderFormatter">Jenis Kelamin</th>
                <th data-field="contact" data-align="left" data-sortable="true">Kontak</th>
                <th data-field="email" data-align="left" data-sortable="true">Email</th>
                <th data-field="address" data-align="left" data-sortable="true" data-formatter="jamaahAddressFormatter">Alamat</th>
            </tr>
            </thead>
        </table>

    @endsection

@stop