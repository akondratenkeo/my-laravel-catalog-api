@extends('front.app')

@section('content')

    <h1>About Me: {{ $first  }} {{ $last  }}</h1>

    @if($people !== null && count($people) > 0)
        <h3>People I Like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquam aliquid, cumque debitis deserunt dolor dolorum eaque eius error excepturi exercitationem explicabo fugit illum maiores minus porro sed veritatis?
    </p>

@stop
