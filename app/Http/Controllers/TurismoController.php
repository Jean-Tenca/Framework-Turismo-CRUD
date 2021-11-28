<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class TurismoController extends Controller
{
    public function index(){

        $pessoas = Pessoa::all();
        //dd($pessoas);       verificar se esta rodando tudo certo no banco.
        return view('turismo.index', ['pessoas' =>$pessoas]);
    }

}
