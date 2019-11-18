<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;

class CidadeController extends Controller
{
    public function viewCidade(){
        // $usuario = new Usuario();
        // $listaUsuarios = $usuario->all();
        // esses codigos podem ser substituidos pelo de baixo
         
        $listaCidades = Cidade::all();

        return view('cidade',['listaCidades'=>$listaCidades]);
}
}