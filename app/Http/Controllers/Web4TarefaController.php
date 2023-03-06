<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4TarefaController extends Controller
{
    //
     public function create(){
    $Web4Tarefa = Web4Tarefa::get();
    return view('Web4Tarefa.create',compact('Web4Tarefa'));
    }

    public function edit($id){
        $Web4Tarefa = Web4Tarefa::findorFail($id);
        return view('Web4Tarefa.edit',['Web4Tarefa'=>$Web4Tarefa]);
    }

     public function update(Request $request){
        Web4Tarefa::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Tarefa')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Tarefa::findorFail($id)->delete();
      return redirect('Web4Tarefa.index')->with('msg', 'Web4Tarefa apagada');
    }

    public function index(){
        $Web4Tarefa = Web4Tarefa::all();
        return view('Web4Tarefa.index',compact('Web4Tarefa'));
    }


    public function store(StoreWeb4TarefaRequest $request){

        $Web4Tarefa = new Web4Tarefa();
        $Web4Tarefa->nome=$request->nome;
        $Web4Tarefa->timestamps=$request->timestamps;
        $Web4Tarefa->save();
        
    }
}
