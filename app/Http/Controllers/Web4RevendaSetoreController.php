<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4RevendaSetoreRequest;
use App\Models\Web4RevendaSetore;
use Illuminate\Http\Request;

class Web4RevendaSetoreController extends Controller
{
    //
     public function create(){
    $Web4RevendaSetore = Web4RevendaSetore::get();
    return view('Web4RevendaSetore.create',compact('Web4RevendaSetore'));
    }

    public function edit($id){
        $Web4RevendaSetore = Web4RevendaSetore::findorFail($id);
        return view('Web4RevendaSetore.edit',['Web4RevendaSetore'=>$Web4RevendaSetore]);
    }

     public function update(Request $request){
        Web4RevendaSetore::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4RevendaSetore')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4RevendaSetore::findorFail($id)->delete();
      return redirect('Web4RevendaSetore.index')->with('msg', 'Web4RevendaSetore apagada');
    }

    public function index(){
        $Web4RevendaSetore = Web4RevendaSetore::all();
        return view('Web4RevendaSetore.index',compact('Web4RevendaSetore'));
    }


    public function store(StoreWeb4RevendaSetoreRequest $request){

        $Web4RevendaSetore = new Web4RevendaSetore();
        $Web4RevendaSetore->nome=$request->nome;
        $Web4RevendaSetore->timestamps=$request->timestamps;
        $Web4RevendaSetore->save();
        
    }
}
