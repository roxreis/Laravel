<?php

namespace App\Http\Controllers;

use App\Cidade;

// use App\Usuario;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //

    public function viewHome(){
        // $usuario = new Usuario();
        // $listaUsuarios = $usuario->all();
        // esses codigos podem ser substituidos pelo de baixo
        
        $listaCidades = Cidade::all();
        
        
        // dd($listaUsuarios); = outro var dump


        return view('cidade',['listaCidades'=>$listaCidades]);
    }
}
