@extends('layouts.master')

	@section('content')
		<h1>Input::get()</h1>
		{{Form::open(array('url'=>'inputGet'))}}
		{{Form::label('name','Name')}}
		{{Form::text('name')}}
		
		{{Form::submit('post !')}}<br/>
		
		{{Form::close()}}
		
		name = {{$name}}
@stop