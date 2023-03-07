<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosAcoesRequest;
use Illuminate\Http\Request;
use App\Models\Web4NegociosAcoes;

class Web4NegociosAcoesController extends Controller
{
    //
     public function create(){
    $Web4NegociosAcoes = Web4NegociosAcoes::get();
    return view('Web4NegociosAcoes.create',compact('Web4NegociosAcoes'));
    }

    public function edit($id){
        $Web4NegociosAcoes = Web4NegociosAcoes::findorFail($id);
        return view('Web4NegociosAcoes.edit',['Web4NegociosAcoes'=>$Web4NegociosAcoes]);
    }

     public function update(Request $request){
        Web4NegociosAcoes::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosAcoes')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosAcoes::findorFail($id)->delete();
      return redirect('Web4NegociosAcoes.index')->with('msg', 'Web4NegociosAcoes apagada');
    }

    public function index(){
        $Web4NegociosAcoes = Web4NegociosAcoes::all();
        return view('Web4NegociosAcoes.index',compact('Web4NegociosAcoes'));
    }


    public function store(StoreWeb4NegociosAcoesRequest $request){

        $Web4NegociosAcoes = $request->all();
        Web4NegociosAcoes::create($Web4NegociosAcoes);        
    }
}
