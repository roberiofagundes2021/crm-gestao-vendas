<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4NegociosEtapaController extends Controller
{
    //
     public function create(){
    $Web4NegociosEtapa = Web4NegociosEtapa::get();
    return view('Web4NegociosEtapa.create',compact('Web4NegociosEtapa'));
    }

    public function edit($id){
        $Web4NegociosEtapa = Web4NegociosEtapa::findorFail($id);
        return view('Web4NegociosEtapa.edit',['Web4NegociosEtapa'=>$Web4NegociosEtapa]);
    }

     public function update(Request $request){
        Web4NegociosEtapa::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosEtapa')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosEtapa::findorFail($id)->delete();
      return redirect('Web4NegociosEtapa.index')->with('msg', 'Web4NegociosEtapa apagada');
    }

    public function index(){
        $Web4NegociosEtapa = Web4NegociosEtapa::all();
        return view('Web4NegociosEtapa.index',compact('Web4NegociosEtapa'));
    }


    public function store(StoreWeb4NegociosEtapaRequest $request){

        $Web4NegociosEtapa = new Web4NegociosEtapa();
        $Web4NegociosEtapa->nome=$request->nome;
        $Web4NegociosEtapa->timestamps=$request->timestamps;
        $Web4NegociosEtapa->save();
        
    }
}
