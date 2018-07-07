<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
class ContatoController extends Controller
{
    //Controller com método index
    public function index(){

        $contatos = [
            (object)["nome"=>"Maria","tel"=>"044-30279847"],
            (object)["nome"=>"Pedro","tel"=>"044-30279847"],
            (object)["nome"=>"José","tel"=>"044-30279847"]
        ];

        //Dando new no objeto Contato que é um model.
        $contato = new Contato();

        //atribuindo o metodo do objeto em um atributo.
        $con = $contato->lista();

        //Chamando o objeto e apontando para o metodo lista*
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Esse é o criar do ContatoController";
    }

    public function editar(){
        return "Esse é o editar do ContatoController";
    }
}
