<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4InformativoAdministradoresRequest;
use Illuminate\Http\Request;
use App\Models\Web4InformativoAdministradores;

class Web4InformativosAdministradoresController extends Controller
{
    //
     public function create(){
    $Web4InformativoAdministradores = Web4InformativoAdministradores::get();
    return view('Web4InformativoAdministradores.create',compact('Web4InformativoAdministradores'));
    }

    public function edit($id){
        $Web4InformativoAdministradores = Web4InformativoAdministradores::findorFail($id);
        return view('Web4InformativoAdministradores.edit',['Web4InformativoAdministradores'=>$Web4InformativoAdministradores]);
    }

     public function update(Request $request){
        Web4InformativoAdministradores::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4InformativoAdministradores')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4InformativoAdministradores::findorFail($id)->delete();
      return redirect('Web4InformativoAdministradores.index')->with('msg', 'Web4InformativoAdministradores apagada');
    }

    public function index(){
        $Web4InformativoAdministradores = Web4InformativoAdministradores::all();
        return view('Web4InformativoAdministradores.index',compact('Web4InformativoAdministradores'));
    }


    public function store(StoreWeb4InformativoAdministradoresRequest $request){

        $Web4InformativoAdministradores = $request->all();
        Web4InformativoAdministradores::create($Web4InformativoAdministradores);
        
    }
}
