@extends('layouts.master')

	@section('content')
		<h1>Request::path()</h1>
		{{Request::path()}}
@stop