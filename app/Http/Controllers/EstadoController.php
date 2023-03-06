<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstadoRequest;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    //
     public function create(){
    $Estado = Estado::get();
    return view('Estado.create',compact('Estado'));
    }

    public function edit($id){
        $Estado = Estado::findorFail($id);
        return view('Estado.edit',['Estado'=>$Estado]);
    }

     public function update(Request $request){
        Estado::find($request->id)->update($request->except('_token'));
        return redirect('index/Estado')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Estado::findorFail($id)->delete();
      return redirect('Estado.index')->with('msg', 'Estado apagada');
    }

    public function index(){
        $Estado = Estado::all();
        return view('Estado.index',compact('Estado'));
    }


    public function store(StoreEstadoRequest $request){

        $Estado = new Estado();
        $Estado->nome=$request->nome;
        $Estado->timestamps=$request->timestamps;
        $Estado->save();
        
    }
}
