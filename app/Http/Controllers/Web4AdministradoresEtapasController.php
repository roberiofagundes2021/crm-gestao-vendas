<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebAdministradoresEtapasRequest;
use Illuminate\Http\Request;
use App\Models\Web4AdministradoresEtapas;

class Web4AdministradoresEtapasController extends Controller
{
    //
     public function create(){
    $Web4AdministradoresEtapas = Web4AdministradoresEtapas::get();
    return view('Web4AdministradoresEtapas.create',compact('Web4AdministradoresEtapas'));
    }

    public function edit($id){
        $Web4AdministradoresEtapas = Web4AdministradoresEtapas::findorFail($id);
        return view('Web4AdministradoresEtapas.edit',['Web4AdministradoresEtapas'=>$Web4AdministradoresEtapas]);
    }

     public function update(Request $request){
        Web4AdministradoresEtapas::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresEtapas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresEtapas::findorFail($id)->delete();
      return redirect('Web4AdministradoresEtapas.index')->with('msg', 'Web4AdministradoresEtapas apagada');
    }

    public function index(){
        $Web4AdministradoresEtapas = Web4AdministradoresEtapas::all();
        return view('Web4AdministradoresEtapas.index',compact('Web4AdministradoresEtapas'));
    }


    public function store(StoreWebAdministradoresEtapasRequest $request){

        $Web4AdministradoresEtapas = new Web4AdministradoresEtapas();
        $Web4AdministradoresEtapas->nome=$request->nome;
        $Web4AdministradoresEtapas->timestamps=$request->timestamps;
        $Web4AdministradoresEtapas->save();
        
    }
}
