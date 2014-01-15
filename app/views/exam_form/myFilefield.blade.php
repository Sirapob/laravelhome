@extends('layouts.master')

@section('content')
{{Form::label('img','Upload')}}
{{Form::file('img')}}
@stop