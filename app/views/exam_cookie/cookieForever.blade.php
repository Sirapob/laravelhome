@extends('layouts.master')

@section('content')

<h1>Cookie::forever()</h1>

Cookie = {{ Cookie::get('myCookie')}}

@stop
