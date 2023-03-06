<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresRevendaController extends Controller
{
    //
     public function create(){
    $Web4AdministradoresRevendas = Web4AdministradoresRevendas::get();
    return view('Web4AdministradoresRevendas.create',compact('Web4AdministradoresRevendas'));
    }

    public function edit($id){
        $Web4AdministradoresRevendas = Web4AdministradoresRevendas::findorFail($id);
        return view('Web4AdministradoresRevendas.edit',['Web4AdministradoresRevendas'=>$Web4AdministradoresRevendas]);
    }

     public function update(Request $request){
        Web4AdministradoresRevendas::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresRevendas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresRevendas::findorFail($id)->delete();
      return redirect('Web4AdministradoresRevendas.index')->with('msg', 'Web4AdministradoresRevendas apagada');
    }

    public function index(){
        $Web4AdministradoresRevendas = Web4AdministradoresRevendas::all();
        return view('Web4AdministradoresRevendas.index',compact('Web4AdministradoresRevendas'));
    }


    public function store(StoreWeb4AdministradoresRevendasRequest $request){

        $Web4AdministradoresRevendas = new Web4AdministradoresRevendas();
        $Web4AdministradoresRevendas->nome=$request->nome;
        $Web4AdministradoresRevendas->timestamps=$request->timestamps;
        $Web4AdministradoresRevendas->save();
        
    }
}
