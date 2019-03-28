
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
                            <p class="">{{$comentario->texto}}</p> <span class="date sub-text">{{$comentario->usuario}}</span>

                        </div>
                    </li>        
                @endif
            @endforeach
        @endif
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Comenta algo..." />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
</div>
            
                
            @endforeach
            {{ $posts->links() }}
            @endif



@endsection