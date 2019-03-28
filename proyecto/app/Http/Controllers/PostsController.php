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
        ->select('u.nombre as usuario','p.nombre as texto','p.post','p.id as id')
        ->orderBy('p.id', 'desc')
        ->get();

      return view('post', ['posts' => $posts,'comentarios' => $comentarios]
    );
    }

    public function edit($id,$mensaje)
    {
        DB::table('comentario')->where('id',$id)->update(['nombre' => $mensaje]);
        return redirect('/posts');
    }
    public function editpost($id){
      $miPost=\DB::table('post')->where('id',$id)->first();
      $curso=\DB::table('curso')->where('codigo',$miPost->id_curso)->first();
      $estudiante = \DB::table('usuario')->where('carnet',$miPost->id_usuario)->first();
      return view('edit_post',['post'=>$miPost,'estudiante'=>$estudiante,'curso'=>$curso]);
    }
    public function update_post($id, Request $request){
      \DB::table('post')
               ->where('id', '=', $id)
               ->update(['post' => $request->mi_post]);
      return redirect('/posts');
    }

    public function add_coment(Request $request){
      $idcoment=\DB::table('comentario')->select('id')->orderBy('id', 'desc')->first();
      $estudiante = \DB::table('usuario')->select('carnet')->first();
      \DB::table('comentario')
             ->insert(['id' => ($idcoment->id+1),
             'post' => $request->post,
             'usuario' => $estudiante->carnet,
             'nombre' => $request->comentario]);

      return redirect('/posts');
    }

    public function newPost(){
      return view('newposts');
    }

    public function add_post(Request $request){
      $idpost=\DB::table('post')->select('id')->orderBy('id', 'desc')->first();
      $estudiante = \DB::table('usuario')->select('carnet')->first();
      \DB::table('post')
             ->insert(['id' => ($idpost->id+1),
             'id_curso' => $request->curso,
             'id_catedratico' => $request->catedratico,
             'id_usuario' => $estudiante->carnet,
             'post' => $request->comentario]);

      return redirect('/posts');
    }
}
