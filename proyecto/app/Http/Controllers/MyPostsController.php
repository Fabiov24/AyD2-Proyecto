<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use Illuminate\Support\Facades\DB;
class MyPostsController extends Controller
{
    public function index(){
        $posts = DB::select("select c.nombre as curso,cat.nombre as catedratico,us.nombre as usuario,post, id from post as p,curso as c, catedratico as cat, usuario as us where p.id_curso = c.codigo and p.id_catedratico = cat.codigo and p.id_usuario = us.carnet");
        // print_r($posts);
        return view('myposts', [
      'posts' => $posts]);
        // $data['posts'] = $posts;
    }

    public function show($id) {
   
        
        $post = DB::table('post')
            ->join('usuario', 'post.id_usuario', '=', 'usuario.carnet')
            ->join('curso', 'post.id_curso', '=', 'curso.codigo')
            ->join('catedratico', 'post.id_catedratico', '=', 'catedratico.codigo')
            ->select('catedratico.nombre as catedratico', 'usuario.nombre as usuario', 'curso.nombre as curso', 'id', 'post')
            ->where('id','=',$id)
            ->first();
        // print_r($post);
        if($post == null)
            return 'No existe el post';
        else {
            $data['post'] = $post;
            return view('post', [
                'post' => $post]);
        }
     }
}
