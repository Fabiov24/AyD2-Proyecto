
@extends('layout')
@section('title', 'Posts')
@section('header')
@section('contenido')


@if(isset($posts))
            @foreach($posts as $post)
            <div class="detailBox">
    <div class="titleBox">
      <label>{{ $post->nombre . ' - ' . $post->curso }}  </label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>
    <div class="commentBox">

        <p class="taskDescription">{{$post->post}}</p>
    </div>
    <div class="actionBox">



        <ul class="commentList">
        @if(isset($comentarios))
            @foreach($comentarios as $comentario)

                @if($comentario->post == $post->id)
                    <li>
                        <div class="commenterImage">
                        <img src="http://placekitten.com/50/50" />
                        </div>
                        <div class="commentText">
                            <textarea class="" id="{{ $comentario->id }}" readonly>{{$comentario->texto}}</textarea>
                            <br>
                            <span class="date sub-text">{{$comentario->usuario}}</span>
                        </div>
                            <a class="btn btn-info boton-editar" id="EDT{{ $comentario->id }}" style="font-size: 0.7rem; padding: 0.2rem 0.4rem;" id_comentario="{{ $comentario->id }}">
                                Editar
                            </a>
                            <a id="DN{{ $comentario->id }}" class="btn btn-success ocultar boton-editar_done" style="font-size: 0.7rem; padding: 0.2rem 0.4rem;" id_comentario="{{ $comentario->id }}" >
                                Done
                            </a>
                    </li>
                @endif
            @endforeach
        @endif
        </ul>
        <form class="form-inline" role="form">
         <a href="edit_post/{{$post->id}}" class="btn btn-info">editar post</a>
        </form>
        {!! Form::open(['url' => 'posts/add_coment']) !!}
        @csrf
        <form class="form-inline" role="form">
              <input type="hidden" name="post" value="{{$post->id}}" />
            <div class="form-group">
                <input class="form-control" type="text" name="comentario" placeholder="Comenta algo..." />
            </div>
            <div class="form-group">
                {!! Form::submit('Add',['class' => 'btn btn-default']) !!}
            </div>
        </form>
        {!! Form::close() !!}
    </div>
</div>


            @endforeach
            {{ $posts->links() }}
            @endif



<style>
    .boton-editar{
        color: white !important;
    }
    .ocultar{
        display: none;
    }
    .commenttext{
        width: 100%;
    }
    .commenttext textarea{
        border: none;
        outline: none;
        width:100%;
    }
    .input_comentario_edicion{
        background-color: #eeeeee;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    jQuery(document).ready(function () {
        $('.boton-editar').click( function () {
            $("#"+$(this).attr('id_comentario')).removeAttr("readonly");
            $("#"+$(this).attr('id_comentario')).addClass("input_comentario_edicion");
            // $("#DN"+$(this).attr('id_comentario')).css("display:block;");
            $("#DN"+$(this).attr('id_comentario')).removeClass("ocultar");
            $("#EDT"+$(this).attr('id_comentario')).addClass("ocultar");
        });
        $('.boton-editar_done').click( function () {
            id_comentario = "";
            var id=$(this).attr('id_comentario');
            var comentario=$("#"+id).val();
            window.location.href='comentario/'+id+'/'+comentario;
        });
    });
    function enviarEditar(){

    }


</script>
@endsection
