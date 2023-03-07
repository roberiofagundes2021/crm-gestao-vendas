<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosMotivoRequest;
use Illuminate\Http\Request;
use App\Models\Web4NegociosMotivo;

class Web4NegociosMotivoController extends Controller
{
    //
     public function create(){
    $Web4NegociosMotivo = Web4NegociosMotivo::get();
    return view('Web4NegociosMotivo.create',compact('Web4NegociosMotivo'));
    }

    public function edit($id){
        $Web4NegociosMotivo = Web4NegociosMotivo::findorFail($id);
        return view('Web4NegociosMotivo.edit',['Web4NegociosMotivo'=>$Web4NegociosMotivo]);
    }

     public function update(Request $request){
        Web4NegociosMotivo::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosMotivo')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosMotivo::findorFail($id)->delete();
      return redirect('Web4NegociosMotivo.index')->with('msg', 'Web4NegociosMotivo apagada');
    }

    public function index(){
        $Web4NegociosMotivo = Web4NegociosMotivo::all();
        return view('Web4NegociosMotivo.index',compact('Web4NegociosMotivo'));
    }


    public function store(StoreWeb4NegociosMotivoRequest $request){

        $Web4NegociosMotivo = $request->all();
        Web4NegociosMotivo::create($Web4NegociosMotivo);
        
        
    }
}
