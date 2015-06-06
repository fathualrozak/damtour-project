@extends('layouts.dashboard')

    @section('section')
        <div class="tree" route="{{ route('network.index') }}">
            <ul>
                <li>
                    <a id="top" href="#">Point</a>
                    <ul>
                        <li>
                            <a id="left" href="#">Point</a>
                            <ul>
                                <li><a id="ll" href="#">Point</a>
                                </li>
                                <li><a id="lm" href="#">Point</a>
                                </li>
                                <li><a id="lr" href="#">Point</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a id="middle" href="#">Point</a>
                            <ul>
                                <li><a id="ml" href="#">Point</a>
                                </li>
                                <li><a id="mm" href="#">Point</a>
                                </li>
                                <li><a id="mr" href="#">Point</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a id="right" href="#">Point</a>
                            <ul>
                                <li><a id="rl" href="#">Point</a>
                                </li>
                                <li><a id="rm" href="#">Point</a>
                                </li>
                                <li><a id="rr" href="#">Point</a>
                                </li>
                            </ul>
                        </li>
                </li>
                </ul>
                </li>
            </ul>
        </div>
    @endsection

@stop