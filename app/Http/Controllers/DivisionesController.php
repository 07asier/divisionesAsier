<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DivisionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('division');
    }

    public function dividir(){

        $dividendo = Input::get('dividendo');
        $divisor = Input::get('divisor');

        $resultado = $dividendo / $divisor;

        DB::table('divisiones')->insert(
            ['dividendo' => $dividendo , 'divisor' => $divisor , 'resultado' => $resultado]);

        return view('respuesta')->with('resultado',$resultado);
    }


}
