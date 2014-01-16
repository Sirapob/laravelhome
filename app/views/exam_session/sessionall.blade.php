@extends('layouts.master')

@section('content')

<h1>Session::all()</h1>

@foreach(Session::all() as $key => $value)
	<div>{{$key}} = {{ print_r($value)}}</div>
@endforeach

@stop