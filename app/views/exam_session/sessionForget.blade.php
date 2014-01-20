@extends('layouts.master')

@section('content')

<h1>Session::forget()</h1>
@if(!empty('myName'))
myName = {{Session::get('myName')}}
@endif

@stop
