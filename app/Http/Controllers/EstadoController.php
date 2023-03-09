<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstadoRequest;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Web4Administradores;
use App\Models\Web4Tarefa;
use App\Models\Web4Negocio;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    //
     public function create(){
    $Estado = Estado::get();
    return view('Estado.create',compact('Estado'));
    }

    public function edit($id){
        $Estado = Estado::findorFail($id);
        return view('Estado.edit',['Estado'=>$Estado]);
    }

     public function update(Request $request){
        Estado::find($request->id)->update($request->except('_token'));
        return redirect('index/Estado')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Estado::findorFail($id)->delete();
      return redirect('Estado.index')->with('msg', 'Estado apagada');
    }

    public function index(){
        $Estado = Estado::all();
        $Cidade = Cidade::all();
        $Web4Tarefa = Web4Tarefa::all();
        $Web4Administradores = Web4Administradores::all();
        $Web4Negocio=Web4Negocio::all();
        return view('Estado.index',compact('Estado','Cidade','Web4Tarefa','Web4Administradores','Web4Negocio'));
    }


    public function store(StoreEstadoRequest $request){
        $Estado = new Estado();
        $Estado->$request->comment;
        $Estado->$request->Codigo;
        $Estado->$request->CodigoIBGE;
        $Estado->$request->Sigla;
        $Estado->$request->Nome;
        $Estado->$request->Regiao;
        $Estado->save();
        
    }
}
