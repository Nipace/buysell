@extends('adminlte::page')

@section('title', 'View Permissions')

@section('content_header')
    <h1>Permissions</h1>
@stop

@section('content')
<ul>
@foreach($permissions as $permission)
<li>{{$permission}}</li>
@endforeach
</ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 