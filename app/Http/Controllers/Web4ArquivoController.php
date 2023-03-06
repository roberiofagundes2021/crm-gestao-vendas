<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $Web4Arquivos->nome=$request->nome;
        $Web4Arquivos->timestamps=$request->timestamps;
        $Web4Arquivos->save();
        
    }
}
