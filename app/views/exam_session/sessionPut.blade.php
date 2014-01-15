@extends('layouts.master')

@section('content')

<h1>Session::put()</h1>
Session = {{Session::get('myName')}}

@stop