@extends('layouts.master')

@section('content')
    @foreach ($weathers as $weather)
        <p class="normal__text">
            <span>City name</span>: {{$weather->city}}
        </p>
        <p class="normal__text">
            <span>API_KEY</span>: {{$weather->API_KEY}}
        </p>
        <span class="meta__text">Keep this a secret</span>
    @endforeach
@endsection

