@extends('layouts.dashboard')

    @section('full-canvas')
    <div class="visible-md visible-lg">
        <div id="tree-container" route="{{ route("api.network.index") }}"></div>
    </div>
    @endsection

@stop