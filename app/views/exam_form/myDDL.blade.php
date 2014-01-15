@extends('layouts.master')

@section('content')
{{Form::label('ddl','DDL = Dropdown List')}} <br>
{{Form::select('ddl',$options)}}
@stop