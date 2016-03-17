@extends('layouts.master')

@section('content')
    {!! Form::open(array('url' => 'weathers')) !!}
        {!! Form::text('API_KEY') !!}
        {!! Form::text('city') !!}
        {!! Form::submit('Add Weather station') !!}
    {!! Form::close() !!}
@endsection

