@extends('layout')
@section('title', 'Posts')
@section('header')
@section('view_scripts')
@section('contenido')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Carnet</th>
            <th>Nombre</th>
            <th>Curso</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          @if(isset($estudiante) && isset($curso))
            <td> {{$estudiante->carnet}} </td>
            <td> {{$estudiante->nombre}}</td>
            <td> {{$curso->nombre}}</td>
          @endif
        </tr>


    </tbody>
</table>
@if(isset($post))
<h1>Post</h1>
<form action="{!! action('PostsController@update_post', ['id' => $post->id]) !!}" method="post">
  @csrf
  <textarea name="mi_post" rows="8" cols="80">{{$post->post}}</textarea>
  <div class="form-group">
      <button type="submit" class="btn btn-success">Actualizar</button>
  </div>
</form>
@endif
@endsection
