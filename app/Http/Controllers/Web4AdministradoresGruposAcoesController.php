<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4AdministradoresGruposAcoesRequest;
use App\Models\Web4AdministradoresGruposAcoes;
use Illuminate\Http\Request;

class Web4AdministradoresGruposAcoesController extends Controller
{
    //
     public function create(){
    $Web4AdministradoresGruposAcoes = Web4AdministradoresGruposAcoes::get();
    return view('Web4AdministradoresGruposAcoes.create',compact('Web4AdministradoresGruposAcoes'));
    }

    public function edit($id){
        $Web4AdministradoresGruposAcoes = Web4AdministradoresGruposAcoes::findorFail($id);
        return view('Web4AdministradoresGruposAcoes.edit',['Web4AdministradoresGruposAcoes'=>$Web4AdministradoresGruposAcoes]);
    }

     public function update(Request $request){
        Web4AdministradoresGruposAcoes::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresGruposAcoes')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresGruposAcoes::findorFail($id)->delete();
      return redirect('Web4AdministradoresGruposAcoes.index')->with('msg', 'Web4AdministradoresGruposAcoes apagada');
    }

    public function index(){
        $Web4AdministradoresGruposAcoes = Web4AdministradoresGruposAcoes::all();
        return view('Web4AdministradoresGruposAcoes.index',compact('Web4AdministradoresGruposAcoes'));
    }


    public function store(StoreWeb4AdministradoresGruposAcoesRequest $request){

        $Web4AdministradoresGruposAcoes = new Web4AdministradoresGruposAcoes();
        $Web4AdministradoresGruposAcoes->$request->comment;
        $Web4AdministradoresGruposAcoes->$request->Codigo;
        $Web4AdministradoresGruposAcoes->$request->CodigoGrupoupo;
        $Web4AdministradoresGruposAcoes->$request->CodigoOrigem;
        $Web4AdministradoresGruposAcoes->save();
        
    }
}
