@extends('layouts.dashboard')

    @section('section')
        <div id="tree-container" route="{{ route("network.index") }}"></div>
    @endsection

@stop