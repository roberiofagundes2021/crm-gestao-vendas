<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4PessoaRequest;
use Illuminate\Http\Request;
use App\Models\Web4Pessoa;

class Web4PessoaController extends Controller
{
    //
     public function create(){
    $Web4Pessoa = Web4Pessoa::get();
    return view('Web4Pessoa.create',compact('Web4Pessoa'));
    }

    public function edit($id){
        $Web4Pessoa = Web4Pessoa::findorFail($id);
        return view('Web4Pessoa.edit',['Web4Pessoa'=>$Web4Pessoa]);
    }

     public function update(Request $request){
        Web4Pessoa::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Pessoa')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Pessoa::findorFail($id)->delete();
      return redirect('Web4Pessoa.index')->with('msg', 'Web4Pessoa apagada');
    }

    public function index(){
        $Web4Pessoa = Web4Pessoa::all();
        return view('Web4Pessoa.index',compact('Web4Pessoa'));
    }


    public function store(StoreWeb4PessoaRequest $request){

        $Web4Pessoa = new Web4Pessoa();
        $Web4Pessoa->nome=$request->nome;
        $Web4Pessoa->timestamps=$request->timestamps;
        $Web4Pessoa->save();
        
    }
}
