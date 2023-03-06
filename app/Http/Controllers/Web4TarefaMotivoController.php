<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4TarefaMotivoController extends Controller
{
    //
     public function create(){
    $Web4TarefaMotivo = Web4TarefaMotivo::get();
    return view('Web4TarefaMotivo.create',compact('Web4TarefaMotivo'));
    }

    public function edit($id){
        $Web4TarefaMotivo = Web4TarefaMotivo::findorFail($id);
        return view('Web4TarefaMotivo.edit',['Web4TarefaMotivo'=>$Web4TarefaMotivo]);
    }

     public function update(Request $request){
        Web4TarefaMotivo::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4TarefaMotivo')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4TarefaMotivo::findorFail($id)->delete();
      return redirect('Web4TarefaMotivo.index')->with('msg', 'Web4TarefaMotivo apagada');
    }

    public function index(){
        $Web4TarefaMotivo = Web4TarefaMotivo::all();
        return view('Web4TarefaMotivo.index',compact('Web4TarefaMotivo'));
    }


    public function store(StoreWeb4TarefaMotivoRequest $request){

        $Web4TarefaMotivo = new Web4TarefaMotivo();
        $Web4TarefaMotivo->nome=$request->nome;
        $Web4TarefaMotivo->timestamps=$request->timestamps;
        $Web4TarefaMotivo->save();
        
    }
}
