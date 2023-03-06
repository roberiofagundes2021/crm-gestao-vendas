<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosLogEtapaRequest;
use Illuminate\Http\Request;
use App\Models\Web4NegociosLogEtapa;

class Web4NegociosLogEtapaController extends Controller
{
    //
     public function create(){
    $Web4NegociosLogEtapa = Web4NegociosLogEtapa::get();
    return view('Web4NegociosLogEtapa.create',compact('Web4NegociosLogEtapa'));
    }

    public function edit($id){
        $Web4NegociosLogEtapa = Web4NegociosLogEtapa::findorFail($id);
        return view('Web4NegociosLogEtapa.edit',['Web4NegociosLogEtapa'=>$Web4NegociosLogEtapa]);
    }

     public function update(Request $request){
        Web4NegociosLogEtapa::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosLogEtapa')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosLogEtapa::findorFail($id)->delete();
      return redirect('Web4NegociosLogEtapa.index')->with('msg', 'Web4NegociosLogEtapa apagada');
    }

    public function index(){
        $Web4NegociosLogEtapa = Web4NegociosLogEtapa::all();
        return view('Web4NegociosLogEtapa.index',compact('Web4NegociosLogEtapa'));
    }


    public function store(StoreWeb4NegociosLogEtapaRequest $request){

        $Web4NegociosLogEtapa = new Web4NegociosLogEtapa();
        $Web4NegociosLogEtapa->nome=$request->nome;
        $Web4NegociosLogEtapa->timestamps=$request->timestamps;
        $Web4NegociosLogEtapa->save();
        
    }
}
