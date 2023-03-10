<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4OperadoraRequest;
use Illuminate\Http\Request;
use App\Models\Web4Operadora;

class Web4OperadoraController extends Controller
{
    //
     public function create(){
    $Web4Operadora = Web4Operadora::get();
    return view('Web4Operadora.create',compact('Web4Operadora'));
    }

    public function edit($id){
        $Web4Operadora = Web4Operadora::findorFail($id);
        return view('Web4Operadora.edit',['Web4Operadora'=>$Web4Operadora]);
    }

     public function update(Request $request){
        Web4Operadora::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Operadora')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Operadora::findorFail($id)->delete();
      return redirect('Web4Operadora.index')->with('msg', 'Web4Operadora apagada');
    }

    public function index(){
        $Web4Operadora = Web4Operadora::all();
        return view('Web4Operadora.index',compact('Web4Operadora'));
    }


    public function store(StoreWeb4OperadoraRequest $request){

        $Web4Operadora = $request->all();
        Web4Operadora::create($Web4Operadora);
        
    }
}
