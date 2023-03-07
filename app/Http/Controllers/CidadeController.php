<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCidadeRequest;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    //
     public function create(){
    $Cidade = Cidade::get();
    return view('Cidade.create',compact('Cidade'));
    }

    public function edit($id){
        $Cidade = Cidade::findorFail($id);
        return view('Cidade.edit',['Cidade'=>$Cidade]);
    }

     public function update(Request $request){
        Cidade::find($request->id)->update($request->except('_token'));
        return redirect('index/Cidade')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Cidade::findorFail($id)->delete();
      return redirect('Cidade.index')->with('msg', 'Cidade apagada');
    }

    public function index(){
        $Cidade = Cidade::all();
        return view('cidade.index',compact('Cidade'));
    }


    public function store(StoreCidadeRequest $request){

         

        $Cidade = new Cidade();
        $Cidade->$request->comment;
        $Cidade->$request->Codigo;
        $Cidade->$request->id_uf;
        $Cidade->$request->CodigoIBGE;
        $Cidade->$request->Estado;
        $Cidade->$request->Nome;
        $Cidade->$request->timestamps;
        $Cidade->save();
        
    }
}
