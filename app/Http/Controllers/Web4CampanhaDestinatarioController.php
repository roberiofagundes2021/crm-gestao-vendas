<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4CampanasDestinatariosRequest;
use Illuminate\Http\Request;
use App\Models\Web4CampanasDestinatarios;

class Web4CampanhaDestinatarioController extends Controller
{
    //
     public function create(){
    $Web4CampanasDestinatarios = Web4CampanasDestinatarios::get();
    return view('Web4CampanasDestinatarios.create',compact('Web4CampanasDestinatarios'));
    }

    public function edit($id){
        $Web4CampanasDestinatarios = Web4CampanasDestinatarios::findorFail($id);
        return view('Web4CampanasDestinatarios.edit',['Web4CampanasDestinatarios'=>$Web4CampanasDestinatarios]);
    }

     public function update(Request $request){
        Web4CampanasDestinatarios::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4CampanasDestinatarios')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4CampanasDestinatarios::findorFail($id)->delete();
      return redirect('Web4CampanasDestinatarios.index')->with('msg', 'Web4CampanasDestinatarios apagada');
    }

    public function index(){
        $Web4CampanasDestinatarios = Web4CampanasDestinatarios::all();
        return view('Web4CampanasDestinatarios.index',compact('Web4CampanasDestinatarios'));
    }


    public function store(StoreWeb4CampanasDestinatariosRequest $request){

        $Web4CampanasDestinatarios = new Web4CampanasDestinatarios();
        $Web4CampanasDestinatarios->nome=$request->nome;
        $Web4CampanasDestinatarios->timestamps=$request->timestamps;
        $Web4CampanasDestinatarios->save();
        
    }
}
