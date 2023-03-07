<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4RevendaCategoriaRequest;
use App\Models\Web4RevendaCategoria;
use Illuminate\Http\Request;


class Web4RevendaCategoriaController extends Controller
{
    //
     public function create(){
    $Web4RevendaCategoria = Web4RevendaCategoria::get();
    return view('Web4RevendaCategoria.create',compact('Web4RevendaCategoria'));
    }

    public function edit($id){
        $Web4RevendaCategoria = Web4RevendaCategoria::findorFail($id);
        return view('Web4RevendaCategoria.edit',['Web4RevendaCategoria'=>$Web4RevendaCategoria]);
    }

     public function update(Request $request){
        Web4RevendaCategoria::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4RevendaCategoria')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4RevendaCategoria::findorFail($id)->delete();
      return redirect('Web4RevendaCategoria.index')->with('msg', 'Web4RevendaCategoria apagada');
    }

    public function index(){
        $Web4RevendaCategoria = Web4RevendaCategoria::all();
        return view('Web4RevendaCategoria.index',compact('Web4RevendaCategoria'));
    }


    public function store(StoreWeb4RevendaCategoriaRequest $request){

        $Web4RevendaCategoria = $request->all();
        Web4RevendaCategoria::create($Web4RevendaCategoria);
       
        
    }
}
