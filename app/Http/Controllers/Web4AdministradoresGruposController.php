<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresGruposController extends Controller
{
    //
     public function create(){
    $WebAdministradoresGrupo = WebAdministradoresGrupo::get();
    return view('WebAdministradoresGrupo.create',compact('WebAdministradoresGrupo'));
    }

    public function edit($id){
        $WebAdministradoresGrupo = WebAdministradoresGrupo::findorFail($id);
        return view('WebAdministradoresGrupo.edit',['WebAdministradoresGrupo'=>$WebAdministradoresGrupo]);
    }

     public function update(Request $request){
        WebAdministradoresGrupo::find($request->id)->update($request->except('_token'));
        return redirect('index/WebAdministradoresGrupo')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      WebAdministradoresGrupo::findorFail($id)->delete();
      return redirect('WebAdministradoresGrupo.index')->with('msg', 'WebAdministradoresGrupo apagada');
    }

    public function index(){
        $WebAdministradoresGrupo = WebAdministradoresGrupo::all();
        return view('WebAdministradoresGrupo.index',compact('WebAdministradoresGrupo'));
    }


    public function store(StoreWebAdministradoresGrupoRequest $request){

        $WebAdministradoresGrupo = new WebAdministradoresGrupo();
        $WebAdministradoresGrupo->nome=$request->nome;
        $WebAdministradoresGrupo->timestamps=$request->timestamps;
        $WebAdministradoresGrupo->save();
        
    }
}
