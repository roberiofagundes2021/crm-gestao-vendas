<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRelatorioPaginaRequest;
use App\Models\RelatorioPagina;
use Illuminate\Http\Request;


class RelatorioPaginaController extends Controller
{
    //
     public function create(){
    $RelatorioPagina = RelatorioPagina::get();
    return view('RelatorioPagina.create',compact('RelatorioPagina'));
    }

    public function edit($id){
        $RelatorioPagina = RelatorioPagina::findorFail($id);
        return view('RelatorioPagina.edit',['RelatorioPagina'=>$RelatorioPagina]);
    }

     public function update(Request $request){
        RelatorioPagina::find($request->id)->update($request->except('_token'));
        return redirect('index/RelatorioPagina')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      RelatorioPagina::findorFail($id)->delete();
      return redirect('RelatorioPagina.index')->with('msg', 'RelatorioPagina apagada');
    }

    public function index(){
        $RelatorioPagina = RelatorioPagina::all();
        return view('RelatorioPagina.index',compact('RelatorioPagina'));
    }


    public function store(StoreRelatorioPaginaRequest $request){

        $RelatorioPagina = new RelatorioPagina();
        $RelatorioPagina->nome=$request->nome;
        $RelatorioPagina->timestamps=$request->timestamps;
        $RelatorioPagina->save();
        
    }
}
