<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;


class Personagens extends Controller
{
    function view(){
        return view('cadastrar-personagem');
    }

   

    function salvarPersonagem(Request $dados){
        $personagem = new Personagem();
        $personagem->create($dados->all());

    }

    function listarPersonagem(){
        $personagem  = Personagem::all()->toArray();
        // dd($personagem);
        
        return view('listar-personagem', ['personagem' => $personagem]);
    }
}
