<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4NegociosStatusController extends Controller
{
    //
     public function create(){
    $Web4NegociosStatus = Web4NegociosStatus::get();
    return view('Web4NegociosStatus.create',compact('Web4NegociosStatus'));
    }

    public function edit($id){
        $Web4NegociosStatus = Web4NegociosStatus::findorFail($id);
        return view('Web4NegociosStatus.edit',['Web4NegociosStatus'=>$Web4NegociosStatus]);
    }

     public function update(Request $request){
        Web4NegociosStatus::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosStatus')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosStatus::findorFail($id)->delete();
      return redirect('Web4NegociosStatus.index')->with('msg', 'Web4NegociosStatus apagada');
    }

    public function index(){
        $Web4NegociosStatus = Web4NegociosStatus::all();
        return view('Web4NegociosStatus.index',compact('Web4NegociosStatus'));
    }


    public function store(StoreWeb4NegociosStatusRequest $request){

        $Web4NegociosStatus = new Web4NegociosStatus();
        $Web4NegociosStatus->nome=$request->nome;
        $Web4NegociosStatus->timestamps=$request->timestamps;
        $Web4NegociosStatus->save();
        
    }
}
