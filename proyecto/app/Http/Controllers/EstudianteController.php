<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EstudianteController extends Controller
{
    public function index(){
      $catedraticos = DB::select("select Dpi, Nombre, Curso, Likes from Catedratico order by Likes desc");
      return view('dashboard', [
      'catedraticos' => $catedraticos]);
    }
}
