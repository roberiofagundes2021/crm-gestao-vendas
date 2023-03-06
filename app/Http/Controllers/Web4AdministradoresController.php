<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreWeb4AdministradoresRequest;
use App\Models\Web4Administradores;

use Illuminate\Http\Request;

class Web4AdministradoresController extends Controller
{
    //
     public function create(){
    $Web4Administradores = Web4Administradores::get();
    return view('Web4Administradores.create',compact('Web4Administradores'));
    }

    public function edit($id){
        $Web4Administradores = Web4Administradores::findorFail($id);
        return view('Web4Administradores.edit',['Web4Administradores'=>$Web4Administradores]);
    }

     public function update(Request $request){
        Web4Administradores::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Administradores')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Administradores::findorFail($id)->delete();
      return redirect('Web4Administradores.index')->with('msg', 'Web4Administradores apagada');
    }

    public function index(){
        $Web4Administradores = Web4Administradores::all();
        return view('Web4Administradores.index',compact('Web4Administradores'));
    }


    public function store(StoreWeb4AdministradoresRequest $request){

        $Web4Administradores = new Web4Administradores();
        $Web4Administradores->nome=$request->nome;
        $Web4Administradores->timestamps=$request->timestamps;
        $Web4Administradores->save();
        
    }
}
