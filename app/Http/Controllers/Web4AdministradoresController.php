<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresController extends Controller
{
    //
     public function create(){
    $WebAdministradores = WebAdministradores::get();
    return view('WebAdministradores.create',compact('WebAdministradores'));
    }

    public function edit($id){
        $WebAdministradores = WebAdministradores::findorFail($id);
        return view('WebAdministradores.edit',['WebAdministradores'=>$WebAdministradores]);
    }

     public function update(Request $request){
        WebAdministradores::find($request->id)->update($request->except('_token'));
        return redirect('index/WebAdministradores')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      WebAdministradores::findorFail($id)->delete();
      return redirect('WebAdministradores.index')->with('msg', 'WebAdministradores apagada');
    }

    public function index(){
        $WebAdministradores = WebAdministradores::all();
        return view('WebAdministradores.index',compact('WebAdministradores'));
    }


    public function store(StoreWebAdministradoresRequest $request){

        $WebAdministradores = new WebAdministradores();
        $WebAdministradores->nome=$request->nome;
        $WebAdministradores->timestamps=$request->timestamps;
        $WebAdministradores->save();
        
    }
}
