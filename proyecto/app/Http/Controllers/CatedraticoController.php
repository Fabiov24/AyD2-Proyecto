<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CatedraticoController extends Controller
{
    public function index(){
      $catedraticos = DB::select("select codigo, Nombre from catedratico order by codigo desc");
      return view('dashboard', [
      'catedraticos' => $catedraticos]);
    }
}
