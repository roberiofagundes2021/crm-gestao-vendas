<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebAdministradoresGrupoPaginaRequest;
use Illuminate\Http\Request;
use App\Models\Web4AdministradoresGrupoPagina;

class Web4AdministradoresGrupoPaginaController extends Controller
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


    public function store(StoreWebAdministradoresGrupoPaginaRequest $request){

        $Web4AdministradoresGrupoPagina = new Web4AdministradoresGrupoPagina();
        $Web4AdministradoresGrupoPagina->$request->comment;
        $Web4AdministradoresGrupoPagina->$request->Codigo;
        $Web4AdministradoresGrupoPagina->$request->CodigoGrupo;
        $Web4AdministradoresGrupoPagina->$request->CodigoOrigem;
        $Web4AdministradoresGrupoPagina->save();
        
    }
}
