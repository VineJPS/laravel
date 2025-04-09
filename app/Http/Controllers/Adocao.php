<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class Adocao extends Controller
{
    function adocao(){
        return view('adocao');
    }

    function getAnimais(){ //Assim retorna as opões em array
        $animais = Animal()::all;
        return $animais->toArray();

        foreach($animais as $animal);{
            echo $animal->nome;
            echo $animal->raca;
        }
    }
    function getAnimaisCollection(){ //Assim em objetos
        $animais = Animal()::all;
    }

    function registrarAnimal(Request $request){ 
       
        $animal = new Animal();
        $animal ->create($request->all());

        return view('detalhes-animal');
    }
}
