<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4RevendaController extends Controller
{
    //
     public function create(){
    $Web4Revenda = Web4Revenda::get();
    return view('Web4Revenda.create',compact('Web4Revenda'));
    }

    public function edit($id){
        $Web4Revenda = Web4Revenda::findorFail($id);
        return view('Web4Revenda.edit',['Web4Revenda'=>$Web4Revenda]);
    }

     public function update(Request $request){
        Web4Revenda::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Revenda')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Revenda::findorFail($id)->delete();
      return redirect('Web4Revenda.index')->with('msg', 'Web4Revenda apagada');
    }

    public function index(){
        $Web4Revenda = Web4Revenda::all();
        return view('Web4Revenda.index',compact('Web4Revenda'));
    }


    public function store(StoreWeb4RevendaRequest $request){

        $Web4Revenda = new Web4Revenda();
        $Web4Revenda->nome=$request->nome;
        $Web4Revenda->timestamps=$request->timestamps;
        $Web4Revenda->save();
        
    }
}
