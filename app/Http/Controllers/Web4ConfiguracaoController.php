<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4ConfiguracoesRequest;
use Illuminate\Http\Request;
use App\Models\Web4Configuracoes;

class Web4ConfiguracaoController extends Controller
{
    //
     public function create(){
    $Web4Configuracoes = Web4Configuracoes::get();
    return view('Web4Configuracoes.create',compact('Web4Configuracoes'));
    }

    public function edit($id){
        $Web4Configuracoes = Web4Configuracoes::findorFail($id);
        return view('Web4Configuracoes.edit',['Web4Configuracoes'=>$Web4Configuracoes]);
    }

     public function update(Request $request){
        Web4Configuracoes::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Configuracoes')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Configuracoes::findorFail($id)->delete();
      return redirect('Web4Configuracoes.index')->with('msg', 'Web4Configuracoes apagada');
    }

    public function index(){
        $Web4Configuracoes = Web4Configuracoes::all();
        return view('Web4Configuracoes.index',compact('Web4Configuracoes'));
    }


    public function store(StoreWeb4ConfiguracoesRequest $request){

        $Web4Configuracoes = new Web4Configuracoes();
        $Web4Configuracoes->nome=$request->nome;
        $Web4Configuracoes->timestamps=$request->timestamps;
        $Web4Configuracoes->save();
        
    }
}
