@extends('layouts.master')

@section('content')

<h1>Session::push()</h1>

@foreach(Session::get('myTime') as $time )
	
	<div>now = {{ $time }}</div>
	
@endforeach

@stop