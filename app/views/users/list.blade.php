@extends('layouts.master')
@section('titulo')
  Users
@stop
 
 @section('contenido')
  <ul>
    @foreach($users as $users)
      <li>{{ $users->name.' '.$users->last_name }} </li>
    @endforeach 
  </ul>
 @stop