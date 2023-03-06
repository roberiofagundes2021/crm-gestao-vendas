<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4InformativoVisualizacaoRequest;
use Illuminate\Http\Request;
use App\Models\Web4InformativoVisualizacao;

class Web4InformativoVisualizacaoController extends Controller
{
    //
     public function create(){
    $Web4InformativoVisualizacao = Web4InformativoVisualizacao::get();
    return view('Web4InformativoVisualizacao.create',compact('Web4InformativoVisualizacao'));
    }

    public function edit($id){
        $Web4InformativoVisualizacao = Web4InformativoVisualizacao::findorFail($id);
        return view('Web4InformativoVisualizacao.edit',['Web4InformativoVisualizacao'=>$Web4InformativoVisualizacao]);
    }

     public function update(Request $request){
        Web4InformativoVisualizacao::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4InformativoVisualizacao')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4InformativoVisualizacao::findorFail($id)->delete();
      return redirect('Web4InformativoVisualizacao.index')->with('msg', 'Web4InformativoVisualizacao apagada');
    }

    public function index(){
        $Web4InformativoVisualizacao = Web4InformativoVisualizacao::all();
        return view('Web4InformativoVisualizacao.index',compact('Web4InformativoVisualizacao'));
    }


    public function store(StoreWeb4InformativoVisualizacaoRequest $request){

        $Web4InformativoVisualizacao = new Web4InformativoVisualizacao();
        $Web4InformativoVisualizacao->nome=$request->nome;
        $Web4InformativoVisualizacao->timestamps=$request->timestamps;
        $Web4InformativoVisualizacao->save();
        
    }
}
