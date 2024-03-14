<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function listar(){
        $carros = carros::all();
        return view('listarCarros')->with('carros', $carros);
    }
    public function listarID($id){
        $carros = carros::find($id);
        return view('listarCarro')->with('carros', $carros);
    }
}