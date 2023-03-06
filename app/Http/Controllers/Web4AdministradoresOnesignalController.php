<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4AdministradoresOnesignalController extends Controller
{
    //
     public function create(){
    $Web4AdministradoresOnesignal = Web4AdministradoresOnesignal::get();
    return view('Web4AdministradoresOnesignal.create',compact('Web4AdministradoresOnesignal'));
    }

    public function edit($id){
        $Web4AdministradoresOnesignal = Web4AdministradoresOnesignal::findorFail($id);
        return view('Web4AdministradoresOnesignal.edit',['Web4AdministradoresOnesignal'=>$Web4AdministradoresOnesignal]);
    }

     public function update(Request $request){
        Web4AdministradoresOnesignal::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4AdministradoresOnesignal')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4AdministradoresOnesignal::findorFail($id)->delete();
      return redirect('Web4AdministradoresOnesignal.index')->with('msg', 'Web4AdministradoresOnesignal apagada');
    }

    public function index(){
        $Web4AdministradoresOnesignal = Web4AdministradoresOnesignal::all();
        return view('Web4AdministradoresOnesignal.index',compact('Web4AdministradoresOnesignal'));
    }


    public function store(StoreWeb4AdministradoresOnesignalRequest $request){

        $Web4AdministradoresOnesignal = new Web4AdministradoresOnesignal();
        $Web4AdministradoresOnesignal->nome=$request->nome;
        $Web4AdministradoresOnesignal->timestamps=$request->timestamps;
        $Web4AdministradoresOnesignal->save();
        
    }
}
