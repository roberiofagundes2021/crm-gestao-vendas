<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4TarefaAcoesRequest;
use App\Models\Web4TarefaAcoes;
use Illuminate\Http\Request;

class Web4TarefaAcoesController extends Controller
{
    //
     public function create(){
    $Web4TarefaAcoes = Web4TarefaAcoes::get();
    return view('Web4TarefaAcoes.create',compact('Web4TarefaAcoes'));
    }

    public function edit($id){
        $Web4TarefaAcoes = Web4TarefaAcoes::findorFail($id);
        return view('Web4TarefaAcoes.edit',['Web4TarefaAcoes'=>$Web4TarefaAcoes]);
    }

     public function update(Request $request){
        Web4TarefaAcoes::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4TarefaAcoes')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4TarefaAcoes::findorFail($id)->delete();
      return redirect('Web4TarefaAcoes.index')->with('msg', 'Web4TarefaAcoes apagada');
    }

    public function index(){
        $Web4TarefaAcoes = Web4TarefaAcoes::all();
        return view('Web4TarefaAcoes.index',compact('Web4TarefaAcoes'));
    }


    public function store(StoreWeb4TarefaAcoesRequest $request){

        $Web4TarefaAcoes = $request->all();
        Web4TarefaAcoes::create($Web4TarefaAcoes);
       
        
    }
}
