@extends('layouts.master')

	@section('content')
		<h1>Input::only()</h1>
		{{Form::open(array('url'=>'inputOnly'))}}
		{{Form::label('name','Name')}}
		{{Form::text('name')}}
		
		{{Form::submit('post !')}}<br/>
		
		{{Form::close()}}
		
		name = {{$name}}
@stop