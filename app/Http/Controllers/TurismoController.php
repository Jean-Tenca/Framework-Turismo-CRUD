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

    public function create(){
        return view('turismo.create');
    }

    public function store(Request $request){       
        Pessoa::create($request->all());
        return redirect()->route('turismo.index');
    }

    public function edit($id){
        $pessoas = Pessoa::where('id', $id)->first();
        if(!empty($pessoas)){
            return view('turismo.edit', ['pessoas' =>$pessoas]); 
        }
        else{
            return redirect()->route('turismo.index'); 
        }
    }

    public function update(Request $request, $id){       
        $data = [
            'nome' => $request->nome,
            'rg' => $request->rg,
            'telefone' => $request->telefone,
        ];
        Pessoa::where('id', $id)->update($data);
        return redirect()->route('turismo.index');
    }

    public function destroy($id){
        Pessoa::where('id', $id)->delete();
        return redirect()->route('turismo.index');
    }

}
