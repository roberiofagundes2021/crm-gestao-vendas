<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegocioRequest;
use Illuminate\Http\Request;
use App\Models\Web4Negocio;

class Web4NegocioController extends Controller
{
    //
     public function create(){
    $Web4Negocio = Web4Negocio::get();
    return view('Web4Negocio.create',compact('Web4Negocio'));
    }

    public function edit($id){
        $Web4Negocio = Web4Negocio::findorFail($id);
        return view('Web4Negocio.edit',['Web4Negocio'=>$Web4Negocio]);
    }

     public function update(Request $request){
        Web4Negocio::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Negocio')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Negocio::findorFail($id)->delete();
      return redirect('Web4Negocio.index')->with('msg', 'Web4Negocio apagada');
    }

    public function index(){
        $Web4Negocio = Web4Negocio::all();
        return view('Web4Negocio.index',compact('Web4Negocio'));
    }


    public function store(StoreWeb4NegocioRequest $request){

        $Web4Negocio = new Web4Negocio();
        $Web4Negocio->nome=$request->nome;
        $Web4Negocio->timestamps=$request->timestamps;
        $Web4Negocio->save();
        
    }
}
