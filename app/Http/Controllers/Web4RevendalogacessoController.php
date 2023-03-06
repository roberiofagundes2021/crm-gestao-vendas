<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4RevendalogacessoController extends Controller
{
    //
     public function create(){
    $Web4Revendalogacesso = Web4Revendalogacesso::get();
    return view('Web4Revendalogacesso.create',compact('Web4Revendalogacesso'));
    }

    public function edit($id){
        $Web4Revendalogacesso = Web4Revendalogacesso::findorFail($id);
        return view('Web4Revendalogacesso.edit',['Web4Revendalogacesso'=>$Web4Revendalogacesso]);
    }

     public function update(Request $request){
        Web4Revendalogacesso::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Revendalogacesso')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Revendalogacesso::findorFail($id)->delete();
      return redirect('Web4Revendalogacesso.index')->with('msg', 'Web4Revendalogacesso apagada');
    }

    public function index(){
        $Web4Revendalogacesso = Web4Revendalogacesso::all();
        return view('Web4Revendalogacesso.index',compact('Web4Revendalogacesso'));
    }


    public function store(StoreWeb4RevendalogacessoRequest $request){

        $Web4Revendalogacesso = new Web4Revendalogacesso();
        $Web4Revendalogacesso->nome=$request->nome;
        $Web4Revendalogacesso->timestamps=$request->timestamps;
        $Web4Revendalogacesso->save();
        
    }
}
