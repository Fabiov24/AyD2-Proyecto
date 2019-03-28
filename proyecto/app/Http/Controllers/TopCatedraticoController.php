<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TopCatedraticoController extends Controller
{
    public function index(){
      $catedraticos = 
        \DB::table('catedratico as c')
        ->join('post as p', 'c.codigo', '=', 'p.id_catedratico')
        ->select('c.codigo', 'c.nombre', DB::raw('count(*) as total'))
        ->groupBy('c.codigo', 'c.nombre')
        ->orderBy('total', 'desc')
        ->paginate(10);

      return view('topcatedraticos', [
      'catedraticos' => $catedraticos]);
    }
}