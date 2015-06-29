@extends('layouts.dashboard')

    @section('section')
    <div class="col-md-12 visible-md visible-lg">
        <div id="tree-container" route="{{ route("network.index") }}"></div>
    </div>
    @endsection

@stop