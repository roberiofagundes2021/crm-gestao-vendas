<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4InformativoController extends Controller
{
    //
     public function create(){
    $Web4Informativo = Web4Informativo::get();
    return view('Web4Informativo.create',compact('Web4Informativo'));
    }

    public function edit($id){
        $Web4Informativo = Web4Informativo::findorFail($id);
        return view('Web4Informativo.edit',['Web4Informativo'=>$Web4Informativo]);
    }

     public function update(Request $request){
        Web4Informativo::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Informativo')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Informativo::findorFail($id)->delete();
      return redirect('Web4Informativo.index')->with('msg', 'Web4Informativo apagada');
    }

    public function index(){
        $Web4Informativo = Web4Informativo::all();
        return view('Web4Informativo.index',compact('Web4Informativo'));
    }


    public function store(StoreWeb4InformativoRequest $request){

        $Web4Informativo = new Web4Informativo();
        $Web4Informativo->nome=$request->nome;
        $Web4Informativo->timestamps=$request->timestamps;
        $Web4Informativo->save();
        
    }
}
