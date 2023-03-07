<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4TarefaCategoriaRequest;
use App\Models\Web4TarefaCategoria;
use Illuminate\Http\Request;

class Web4TarefaCategoriaController extends Controller
{
    //
     public function create(){
    $Web4TarefaCategoria = Web4TarefaCategoria::get();
    return view('Web4TarefaCategoria.create',compact('Web4TarefaCategoria'));
    }

    public function edit($id){
        $Web4TarefaCategoria = Web4TarefaCategoria::findorFail($id);
        return view('Web4TarefaCategoria.edit',['Web4TarefaCategoria'=>$Web4TarefaCategoria]);
    }

     public function update(Request $request){
        Web4TarefaCategoria::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4TarefaCategoria')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4TarefaCategoria::findorFail($id)->delete();
      return redirect('Web4TarefaCategoria.index')->with('msg', 'Web4TarefaCategoria apagada');
    }

    public function index(){
        $Web4TarefaCategoria = Web4TarefaCategoria::all();
        return view('Web4TarefaCategoria.index',compact('Web4TarefaCategoria'));
    }


    public function store(StoreWeb4TarefaCategoriaRequest $request){

        $Web4TarefaCategoria = $request->all();
        Web4TarefaCategoria::create($Web4TarefaCategoria);
        
    }
}
