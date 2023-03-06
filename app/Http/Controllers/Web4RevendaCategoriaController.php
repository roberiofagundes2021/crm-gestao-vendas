<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4RevendaCategoriaController extends Controller
{
    //
     public function create(){
    $Web4RelatorioAcesso = Web4RelatorioAcesso::get();
    return view('Web4RelatorioAcesso.create',compact('Web4RelatorioAcesso'));
    }

    public function edit($id){
        $Web4RelatorioAcesso = Web4RelatorioAcesso::findorFail($id);
        return view('Web4RelatorioAcesso.edit',['Web4RelatorioAcesso'=>$Web4RelatorioAcesso]);
    }

     public function update(Request $request){
        Web4RelatorioAcesso::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4RelatorioAcesso')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4RelatorioAcesso::findorFail($id)->delete();
      return redirect('Web4RelatorioAcesso.index')->with('msg', 'Web4RelatorioAcesso apagada');
    }

    public function index(){
        $Web4RelatorioAcesso = Web4RelatorioAcesso::all();
        return view('Web4RelatorioAcesso.index',compact('Web4RelatorioAcesso'));
    }


    public function store(StoreWeb4RelatorioAcessoRequest $request){

        $Web4RelatorioAcesso = new Web4RelatorioAcesso();
        $Web4RelatorioAcesso->nome=$request->nome;
        $Web4RelatorioAcesso->timestamps=$request->timestamps;
        $Web4RelatorioAcesso->save();
        
    }
}
