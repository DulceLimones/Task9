@extends('adminlte::page')

@section('title', 'Photos')

@section('content_header')
    <h1>Photos</h1>
@stop

@section('content')
    <img src="vendor/adminlte/dist/img/coconut.png" height="300">
    <img src="vendor/adminlte/dist/img/coconut.png" height="300">
    <img src="vendor/adminlte/dist/img/coconut.png" height="300">
    <img src="vendor/adminlte/dist/img/coconut.png" height="300">
    <img src="vendor/adminlte/dist/img/coconut.png" height="300">
    <img src="vendor/adminlte/dist/img/coconut.png" height="300">
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop