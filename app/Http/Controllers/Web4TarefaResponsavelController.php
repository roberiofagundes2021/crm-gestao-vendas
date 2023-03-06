<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4TarefaResponsavelController extends Controller
{
    //
     public function create(){
    $Web4TarefaResponsavel = Web4TarefaResponsavel::get();
    return view('Web4TarefaResponsavel.create',compact('Web4TarefaResponsavel'));
    }

    public function edit($id){
        $Web4TarefaResponsavel = Web4TarefaResponsavel::findorFail($id);
        return view('Web4TarefaResponsavel.edit',['Web4TarefaResponsavel'=>$Web4TarefaResponsavel]);
    }

     public function update(Request $request){
        Web4TarefaResponsavel::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4TarefaResponsavel')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4TarefaResponsavel::findorFail($id)->delete();
      return redirect('Web4TarefaResponsavel.index')->with('msg', 'Web4TarefaResponsavel apagada');
    }

    public function index(){
        $Web4TarefaResponsavel = Web4TarefaResponsavel::all();
        return view('Web4TarefaResponsavel.index',compact('Web4TarefaResponsavel'));
    }


    public function store(StoreWeb4TarefaResponsavelRequest $request){

        $Web4TarefaResponsavel = new Web4TarefaResponsavel();
        $Web4TarefaResponsavel->nome=$request->nome;
        $Web4TarefaResponsavel->timestamps=$request->timestamps;
        $Web4TarefaResponsavel->save();
        
    }
}
