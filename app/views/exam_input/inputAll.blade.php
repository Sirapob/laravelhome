@extends('layouts.master')

	@section('content')
		<h1>Input::all()</h1>
		{{Form::open(array('url'=>'inputAll'))}}
		
		{{Form::label('name','Name')}}
		{{Form::text('name')}}<br />
		
		{{Form::label('email','Email')}}
		{{Form::text('email')}}<br />
		
		{{Form::submit('post !')}}<br/>
		
		{{Form::close()}}
		
		@if(!empty($input['name']) AND !empty($input['email']))
			name = {{ $input['name'] }}<br />
			email = {{ $input['email'] }}
		@endif
@stop
