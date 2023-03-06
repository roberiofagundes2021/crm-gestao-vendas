<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4AutavisosRequest;
use Illuminate\Http\Request;
use App\Models\Web4Autavisos;

class Web4AutavisoController extends Controller
{
    //
     public function create(){
    $Web4Autavisos = Web4Autavisos::get();
    return view('Web4Autavisos.create',compact('Web4Autavisos'));
    }

    public function edit($id){
        $Web4Autavisos = Web4Autavisos::findorFail($id);
        return view('Web4Autavisos.edit',['Web4Autavisos'=>$Web4Autavisos]);
    }

     public function update(Request $request){
        Web4Autavisos::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Autavisos')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Autavisos::findorFail($id)->delete();
      return redirect('Web4Autavisos.index')->with('msg', 'Web4Autavisos apagada');
    }

    public function index(){
        $Web4Autavisos = Web4Autavisos::all();
        return view('Web4Autavisos.index',compact('Web4Autavisos'));
    }


    public function store(StoreWeb4AutavisosRequest $request){

        $Web4Autavisos = new Web4Autavisos();
        $Web4Autavisos->nome=$request->nome;
        $Web4Autavisos->timestamps=$request->timestamps;
        $Web4Autavisos->save();
        
    }
}
