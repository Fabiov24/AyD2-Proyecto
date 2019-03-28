@extends('layout')
@section('title', 'Posts')
@section('header')
@section('contenido')


</br>
</br>
</br>
<div class="col-md-8 col-sm-8 col-xs-12"  align="center">

{!! Form::open(['url' => 'posts/add_post']) !!}
@csrf
<div class="form-group">
    <input class="form-control" type="text" name="curso" placeholder="id del curso..." />
</div>

</br>

<div class="form-group">
    <input class="form-control" type="text" name="catedratico" placeholder="id del catedratico..." />
</div>
</br>

<div class="form-group">
    <input class="form-control" type="text" name="comentario" placeholder="Nombre del post..." />
</div>
<div class="form-group">
    {!! Form::submit('Add',['class' => 'btn btn-default']) !!}
</div>

{!! Form::close() !!}

</div>

@endsection
