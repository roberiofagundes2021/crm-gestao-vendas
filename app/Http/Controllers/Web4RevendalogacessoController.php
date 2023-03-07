<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4RevendalogacessoRequest;
use App\Models\Web4Revendalogacesso;
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

        $Web4Revendalogacesso = $request->all();
        Web4Revendalogacesso::create($Web4Revendalogacesso);        
    }
}
