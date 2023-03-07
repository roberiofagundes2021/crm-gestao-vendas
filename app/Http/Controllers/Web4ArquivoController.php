<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4ArquivosRequest;
use Illuminate\Http\Request;
use App\Models\Web4Arquivos;

class Web4ArquivoController extends Controller
{
    //
     public function create(){
    $Web4Arquivos = Web4Arquivos::get();
    return view('Web4Arquivos.create',compact('Web4Arquivos'));
    }

    public function edit($id){
        $Web4Arquivos = Web4Arquivos::findorFail($id);
        return view('Web4Arquivos.edit',['Web4Arquivos'=>$Web4Arquivos]);
    }

     public function update(Request $request){
        Web4Arquivos::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Arquivos')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Arquivos::findorFail($id)->delete();
      return redirect('Web4Arquivos.index')->with('msg', 'Web4Arquivos apagada');
    }

    public function index(){
        $Web4Arquivos = Web4Arquivos::all();
        return view('Web4Arquivos.index',compact('Web4Arquivos'));
    }


    public function store(StoreWeb4ArquivosRequest $request){

        $Web4Arquivos = new Web4Arquivos();
        $Web4Arquivos->$request->comment;
        $Web4Arquivos->$request->Codigo;
        $Web4Arquivos->$request->IsDeletado;
        $Web4Arquivos->$request->DataCadastro;
        $Web4Arquivos->$request->IP;
        $Web4Arquivos->$request->OrigemTipo;
        $Web4Arquivos->$request->OrigemCodigo;
        $Web4Arquivos->$request->Arquivo;
        $Web4Arquivos->$request->Legenda;
        $Web4Arquivos->save();
        
    }
}
