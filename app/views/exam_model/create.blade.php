@extends('layouts.master')
@section('content')
<h1>Create</h1>

{{Form::open()}}

{{Form::label('category_id','Category')}}
{{Form::select('category_id',$categoryOptions)}}<br>

{{Form::label('name')}}
{{Form::text('name')}}<br>

{{Form::label('price')}}
{{Form::text('price')}}<br>

{{Form::submit('Insert !')}}

{{Form::close()}}

@stop
