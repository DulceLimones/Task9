@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Welcome</h1>
        </div>
        <div class="card-body">
            <p>Hello Welcome to the Coconut Page</p>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop