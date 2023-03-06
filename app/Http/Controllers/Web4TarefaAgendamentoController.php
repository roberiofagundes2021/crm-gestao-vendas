<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4TarefaAgendamentoController extends Controller
{
    //
     public function create(){
    $Web4TarefaAgendamento = Web4TarefaAgendamento::get();
    return view('Web4TarefaAgendamento.create',compact('Web4TarefaAgendamento'));
    }

    public function edit($id){
        $Web4TarefaAgendamento = Web4TarefaAgendamento::findorFail($id);
        return view('Web4TarefaAgendamento.edit',['Web4TarefaAgendamento'=>$Web4TarefaAgendamento]);
    }

     public function update(Request $request){
        Web4TarefaAgendamento::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4TarefaAgendamento')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4TarefaAgendamento::findorFail($id)->delete();
      return redirect('Web4TarefaAgendamento.index')->with('msg', 'Web4TarefaAgendamento apagada');
    }

    public function index(){
        $Web4TarefaAgendamento = Web4TarefaAgendamento::all();
        return view('Web4TarefaAgendamento.index',compact('Web4TarefaAgendamento'));
    }


    public function store(StoreWeb4TarefaAgendamentoRequest $request){

        $Web4TarefaAgendamento = new Web4TarefaAgendamento();
        $Web4TarefaAgendamento->nome=$request->nome;
        $Web4TarefaAgendamento->timestamps=$request->timestamps;
        $Web4TarefaAgendamento->save();
        
    }
}
