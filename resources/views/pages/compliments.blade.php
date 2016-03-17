@extends('layouts.master')

@section('content')
    @foreach ($compliments as $compliment)
        <p style="color: #000">
            {{$compliment->body}}
        </p>
    @endforeach
@endsection

