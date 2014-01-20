@extends('layouts.master')

@section('content')

<h1>Session::forget()</h1>

myName = {{Session::get('myName')}}


@stop
