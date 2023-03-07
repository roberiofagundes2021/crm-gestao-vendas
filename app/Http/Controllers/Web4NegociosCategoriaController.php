<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosCategoriaRequest;
use App\Models\Web4NegociosCategoria;
use Illuminate\Http\Request;

class Web4NegociosCategoriaController extends Controller
{
    //
     public function create(){
    $Web4NegociosCategoria = Web4NegociosCategoria::get();
    return view('Web4NegociosCategoria.create',compact('Web4NegociosCategoria'));
    }

    public function edit($id){
        $Web4NegociosCategoria = Web4NegociosCategoria::findorFail($id);
        return view('Web4NegociosCategoria.edit',['Web4NegociosCategoria'=>$Web4NegociosCategoria]);
    }

     public function update(Request $request){
        Web4NegociosCategoria::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosCategoria')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosCategoria::findorFail($id)->delete();
      return redirect('Web4NegociosCategoria.index')->with('msg', 'Web4NegociosCategoria apagada');
    }

    public function index(){
        $Web4NegociosCategoria = Web4NegociosCategoria::all();
        return view('Web4NegociosCategoria.index',compact('Web4NegociosCategoria'));
    }


    public function store(StoreWeb4NegociosCategoriaRequest $request){

        $Web4NegociosCategoria = $request->all();
        Web4NegociosCategoria::create($Web4NegociosCategoria);
       
        
    }
}
