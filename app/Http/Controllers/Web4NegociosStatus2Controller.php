<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosStatus2Request;
use Illuminate\Http\Request;
use App\Models\Web4NegociosStatus2;

class Web4NegociosStatus2Controller extends Controller
{
    //
     public function create(){
    $Web4NegociosStatus2 = Web4NegociosStatus2::get();
    return view('Web4NegociosStatus2.create',compact('Web4NegociosStatus2'));
    }

    public function edit($id){
        $Web4NegociosStatus2 = Web4NegociosStatus2::findorFail($id);
        return view('Web4NegociosStatus2.edit',['Web4NegociosStatus2'=>$Web4NegociosStatus2]);
    }

     public function update(Request $request){
        Web4NegociosStatus2::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosStatus2')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosStatus2::findorFail($id)->delete();
      return redirect('Web4NegociosStatus2.index')->with('msg', 'Web4NegociosStatus2 apagada');
    }

    public function index(){
        $Web4NegociosStatus2 = Web4NegociosStatus2::all();
        return view('Web4NegociosStatus2.index',compact('Web4NegociosStatus2'));
    }


    public function store(StoreWeb4NegociosStatus2Request $request){

        $Web4NegociosStatus2 = new Web4NegociosStatus2();
        $Web4NegociosStatus2->nome=$request->nome;
        $Web4NegociosStatus2->timestamps=$request->timestamps;
        $Web4NegociosStatus2->save();
        
    }
}
