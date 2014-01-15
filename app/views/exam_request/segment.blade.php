@extends('layouts.master')

	@section('content')
		<h1>Request::segment()</h1>
		<div>segment = {{Request::segment(1)}}</div>
		<div>segment = {{Request::segment(2)}}</div>
		<div>segment = {{Request::segment(3)}}</div>
@stop