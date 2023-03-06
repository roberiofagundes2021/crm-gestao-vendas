<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4AdministradoresTokenAcessoRequest;
use Illuminate\Http\Request;
use App\Models\Web4AdministradoresTokenAcesso;

class Web4AdministradoresTokenAcessoController extends Controller
{
    //
     public function create(){
    $Web4AdministradoresTokenAcesso = Web4AdministradoresTokenAcesso::get();
    return view('Web4AdministradoresTokenAcesso.create',compact('Web4AdministradoresTokenAcesso'));
    }

    public function edit($id){
        $Web4AdministradoresTokenAcesso = Web4AdministradoresTokenAcesso::findorFail($id);
        return view('Web4AdministradoresTokenAcesso.edit',['Web4AdministradoresTokenAcesso'=>$Web4AdministradoresTokenAcesso]);
    }

     public function update(Request $request){
        Web4AdministradoresTokenAcesso::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresTokenAcesso')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresTokenAcesso::findorFail($id)->delete();
      return redirect('Web4AdministradoresTokenAcesso.index')->with('msg', 'Web4AdministradoresTokenAcesso apagada');
    }

    public function index(){
        $Web4AdministradoresTokenAcesso = Web4AdministradoresTokenAcesso::all();
        return view('Web4AdministradoresTokenAcesso.index',compact('Web4AdministradoresTokenAcesso'));
    }


    public function store(StoreWeb4AdministradoresTokenAcessoRequest $request){

        $Web4AdministradoresTokenAcesso = new Web4AdministradoresTokenAcesso();
        $Web4AdministradoresTokenAcesso->nome=$request->nome;
        $Web4AdministradoresTokenAcesso->timestamps=$request->timestamps;
        $Web4AdministradoresTokenAcesso->save();
        
    }
}
