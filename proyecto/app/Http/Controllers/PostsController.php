<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    public function index(){
      $posts = 
        \DB::table('post as p')
        ->join('usuario as u', 'u.carnet', '=', 'p.id_usuario')
        ->join('curso as c', 'c.codigo', '=', 'p.id_curso')
        ->select('u.nombre','p.post','p.id as id','c.nombre as curso')
        ->orderBy('id', 'desc')
        ->paginate(5);

      $comentarios = 
        \DB::table('comentario as p')
        ->join('usuario as u', 'u.carnet', '=', 'p.usuario')
        ->select('u.nombre as usuario','p.nombre as texto','p.post')
        ->orderBy('p.id', 'desc')
        ->get();

      return view('post', ['posts' => $posts,'comentarios' => $comentarios]
    );
    }
}