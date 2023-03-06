<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4CampanhaController extends Controller
{
    //
     public function create(){
    $Web4Campanas = Web4Campanas::get();
    return view('Web4Campanas.create',compact('Web4Campanas'));
    }

    public function edit($id){
        $Web4Campanas = Web4Campanas::findorFail($id);
        return view('Web4Campanas.edit',['Web4Campanas'=>$Web4Campanas]);
    }

     public function update(Request $request){
        Web4Campanas::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Campanas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Campanas::findorFail($id)->delete();
      return redirect('Web4Campanas.index')->with('msg', 'Web4Campanas apagada');
    }

    public function index(){
        $Web4Campanas = Web4Campanas::all();
        return view('Web4Campanas.index',compact('Web4Campanas'));
    }


    public function store(StoreWeb4CampanasRequest $request){

        $Web4Campanas = new Web4Campanas();
        $Web4Campanas->nome=$request->nome;
        $Web4Campanas->timestamps=$request->timestamps;
        $Web4Campanas->save();
        
    }
}
