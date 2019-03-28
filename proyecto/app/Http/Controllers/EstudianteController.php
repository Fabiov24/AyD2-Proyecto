<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EstudianteController extends Controller
{
    public function index(){
      $catedraticos = DB::table('catedratico')
                   ->select('codigo', 'nombre')
                   ->first();
      return view('dashboard', [
      'catedraticos' => $catedraticos]);
    }
}
