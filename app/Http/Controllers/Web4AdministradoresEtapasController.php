<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresEtapasController extends Controller
{
    //
     public function create(){
    $WebAdministradoresEtapas = WebAdministradoresEtapas::get();
    return view('WebAdministradoresEtapas.create',compact('WebAdministradoresEtapas'));
    }

    public function edit($id){
        $WebAdministradoresEtapas = WebAdministradoresEtapas::findorFail($id);
        return view('WebAdministradoresEtapas.edit',['WebAdministradoresEtapas'=>$WebAdministradoresEtapas]);
    }

     public function update(Request $request){
        WebAdministradoresEtapas::find($request->id)->update($request->except('_token'));
        return redirect('index/WebAdministradoresEtapas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      WebAdministradoresEtapas::findorFail($id)->delete();
      return redirect('WebAdministradoresEtapas.index')->with('msg', 'WebAdministradoresEtapas apagada');
    }

    public function index(){
        $WebAdministradoresEtapas = WebAdministradoresEtapas::all();
        return view('WebAdministradoresEtapas.index',compact('WebAdministradoresEtapas'));
    }


    public function store(StoreWebAdministradoresEtapasRequest $request){

        $WebAdministradoresEtapas = new WebAdministradoresEtapas();
        $WebAdministradoresEtapas->nome=$request->nome;
        $WebAdministradoresEtapas->timestamps=$request->timestamps;
        $WebAdministradoresEtapas->save();
        
    }
}
