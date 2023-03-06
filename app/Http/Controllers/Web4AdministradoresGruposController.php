<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebAdministradoresGrupoRequest;
use Illuminate\Http\Request;
use App\Models\Web4AdministradoresGrupo;

class Web4AdministradoresGruposController extends Controller
{
    //
     public function create(){
    $WebAdministradoresGrupo = Web4AdministradoresGrupo::get();
    return view('Web4AdministradoresGrupo.create',compact('Web4AdministradoresGrupo'));
    }

    public function edit($id){
        $Web4AdministradoresGrupo = Web4AdministradoresGrupo::findorFail($id);
        return view('Web4AdministradoresGrupo.edit',['Web4AdministradoresGrupo'=>$Web4AdministradoresGrupo]);
    }

     public function update(Request $request){
        Web4AdministradoresGrupo::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresGrupo')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresGrupo::findorFail($id)->delete();
      return redirect('Web4AdministradoresGrupo.index')->with('msg', 'Web4AdministradoresGrupo apagada');
    }

    public function index(){
        $Web4AdministradoresGrupo = Web4AdministradoresGrupo::all();
        return view('Web4AdministradoresGrupo.index',compact('Web4AdministradoresGrupo'));
    }


    public function store(StoreWebAdministradoresGrupoRequest $request){

        $Web4AdministradoresGrupo = new Web4AdministradoresGrupo();
        $Web4AdministradoresGrupo->nome=$request->nome;
        $Web4AdministradoresGrupo->timestamps=$request->timestamps;
        $Web4AdministradoresGrupo->save();
        
    }
}
