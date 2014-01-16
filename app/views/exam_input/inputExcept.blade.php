@extends('layouts.master')

	@section('content')
		<h1>Input::except()</h1>
		{{Form::open(array('url'=>'inputExcept'))}}
		
		{{Form::label('name','Name')}}
		{{Form::text('name')}}<br />
		
		{{Form::label('email','Email')}}
		{{Form::text('email')}}<br />
		
		{{Form::submit('post !')}}<br/>
		
		{{Form::close()}}
		
		
			name = {{ @$input['name'] }}<br />
			email = {{ @$input['email'] }}
		
@stop
