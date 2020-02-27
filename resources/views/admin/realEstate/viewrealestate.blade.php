{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Real Estate')

@section('content_header')
@stop

@section('content')
    <a href="realestate/create"><button class="btn btn-primary">Add a Real Estate   </button></a>
    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>     
     <th scope="col">ID</th>
      <th scope="col">Property Name</th>
      <th scope="col">Property Status</th>

    </tr>
  </thead>
  <tbody>
  @foreach($realestate as $r)
    <tr>
    <td>{{$r->id??''}}</td>
    <td>{{$r->property_name??''}}</td>
    <td>{{$r->property_status??''}}</td>
</tr>
@endforeach
</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop