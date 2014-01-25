@extends('layouts.master')
@section('content')
<h1>Read</h1>

	@foreach($model as $value)
		<div style="border: 1px solid;padding: 10px">
			<b>{{$value->category->name}}</b><br>
			{{$value->name}}<br>
			<a href="{{ URL::to('update',$value->id)}}">Update</a>
			<a href="{{URL::to('delete',$value->id)}}">Delete</a>
		</div>
	@endforeach
@stop
