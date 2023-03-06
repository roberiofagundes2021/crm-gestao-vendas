<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresGrupoPaginaController extends Controller
{
    //
     public function create(){
    $WebAdministradoresGrupoPagina = WebAdministradoresGrupoPagina::get();
    return view('WebAdministradoresGrupoPagina.create',compact('WebAdministradoresGrupoPagina'));
    }

    public function edit($id){
        $WebAdministradoresGrupoPagina = WebAdministradoresGrupoPagina::findorFail($id);
        return view('WebAdministradoresGrupoPagina.edit',['WebAdministradoresGrupoPagina'=>$WebAdministradoresGrupoPagina]);
    }

     public function update(Request $request){
        WebAdministradoresGrupoPagina::find($request->id)->update($request->except('_token'));
        return redirect('index/WebAdministradoresGrupoPagina')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      WebAdministradoresGrupoPagina::findorFail($id)->delete();
      return redirect('WebAdministradoresGrupoPagina.index')->with('msg', 'WebAdministradoresGrupoPagina apagada');
    }

    public function index(){
        $WebAdministradoresGrupoPagina = WebAdministradoresGrupoPagina::all();
        return view('WebAdministradoresGrupoPagina.index',compact('WebAdministradoresGrupoPagina'));
    }


    public function store(StoreWebAdministradoresGrupoPaginaRequest $request){

        $WebAdministradoresGrupoPagina = new WebAdministradoresGrupoPagina();
        $WebAdministradoresGrupoPagina->nome=$request->nome;
        $WebAdministradoresGrupoPagina->timestamps=$request->timestamps;
        $WebAdministradoresGrupoPagina->save();
        
    }
}
