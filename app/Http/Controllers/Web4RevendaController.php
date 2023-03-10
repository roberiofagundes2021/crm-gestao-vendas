<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4RevendaRequest;
use App\Models\Web4Administradores;
use App\Models\Web4Revenda;
use Illuminate\Http\Request;

class Web4RevendaController extends Controller
{
    //
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


    public function store(StoreWeb4RevendaRequest $request){

        $Web4Revenda = $request->all();
        Web4Revenda::create($Web4Revenda);
        
        
    }
}
