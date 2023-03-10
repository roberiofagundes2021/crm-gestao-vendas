<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4AdministradoresRevendasRequest;
use Illuminate\Http\Request;
use App\Models\Web4AdministradoresRevendas;

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
        $Web4AdministradoresRevendas->$request->comment;
        $Web4AdministradoresRevendas->$request->Codigo;
        $Web4AdministradoresRevendas->$request->CodigoAdministrador;
        $Web4AdministradoresRevendas->$request->CodigoRevenda;
        $Web4AdministradoresRevendas->save();
        
    }
}
