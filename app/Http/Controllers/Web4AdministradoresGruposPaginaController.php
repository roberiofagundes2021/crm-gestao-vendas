<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresGruposPaginaController extends Controller
{
    //
     public function create(){
    $Web4AdministradoresGrupoPagina = Web4AdministradoresGrupoPagina::get();
    return view('Web4AdministradoresGrupoPagina.create',compact('Web4AdministradoresGrupoPagina'));
    }

    public function edit($id){
        $Web4AdministradoresGrupoPagina = Web4AdministradoresGrupoPagina::findorFail($id);
        return view('Web4AdministradoresGrupoPagina.edit',['Web4AdministradoresGrupoPagina'=>$Web4AdministradoresGrupoPagina]);
    }

     public function update(Request $request){
        Web4AdministradoresGrupoPagina::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresGrupoPagina')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresGrupoPagina::findorFail($id)->delete();
      return redirect('Web4AdministradoresGrupoPagina.index')->with('msg', 'Web4AdministradoresGrupoPagina apagada');
    }

    public function index(){
        $Web4AdministradoresGrupoPagina = Web4AdministradoresGrupoPagina::all();
        return view('Web4AdministradoresGrupoPagina.index',compact('Web4AdministradoresGrupoPagina'));
    }


    public function store(StoreWeb4AdministradoresGrupoPaginaRequest $request){

        $Web4AdministradoresGrupoPagina = new Web4AdministradoresGrupoPagina();
        $Web4AdministradoresGrupoPagina->nome=$request->nome;
        $Web4AdministradoresGrupoPagina->timestamps=$request->timestamps;
        $Web4AdministradoresGrupoPagina->save();
        
    }
}
