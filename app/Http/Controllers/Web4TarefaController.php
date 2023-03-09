<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4RevendaRequest;
use App\Http\Requests\StoreWeb4TarefaRequest;
use App\Models\Web4Administradores;
use App\Models\Web4Revenda;
use App\Models\Web4Tarefa;
use Illuminate\Http\Request;

/**
 * Summary of Web4TarefaController
 */
class Web4TarefaController extends Controller
{
     public function create(){
    $Web4Revenda = Web4Revenda::get();
    return view('Web4Revenda.create',compact('Web4Revenda'));
    }

    public function edit($id){
        $Web4Revenda = Web4Revenda::findorFail($id);
        return view('Web4Revenda.edit',['Web4Revenda'=>$Web4Revenda]);
    }

     public function update(Request $request){
        Web4Revenda::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Revenda')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Revenda::findorFail($id)->delete();
      return redirect('Web4Revenda.index')->with('msg', 'Web4Revenda apagada');
    }

    public function index(){
        $Web4Revenda = Web4Revenda::all();
        $Web4Administradores = Web4Administradores::all();
        return view('tarefa.index',compact('Web4Revenda','Web4Administradores'));
    }


    /**
     * Summary of store
     * @param StoreWeb4RevendaRequest $request
     * @return void
     */
    public function store(StoreWeb4RevendaRequest $request){

        $Web4Revenda = $request->all();
        Web4Revenda::create($Web4Revenda);
        
        
    }
}
