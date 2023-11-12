@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
    <h1>Contact</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Coconut Contact</h1>
        </div>
        <div class="card-body">
            <h4>Coconut Page</h4>
            <b>Phone: </b>01 800 coconut
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop