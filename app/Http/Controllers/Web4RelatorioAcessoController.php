<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4RelatorioAcessoRequest;
use Illuminate\Http\Request;
use App\Models\Web4RelatorioAcesso;

class Web4RelatorioAcessoController extends Controller
{
    //
     public function create(){
    $Web4RelatorioAcesso = Web4RelatorioAcesso::get();
    return view('Web4RelatorioAcesso.create',compact('Web4RelatorioAcesso'));
    }

    public function edit($id){
        $Web4RelatorioAcesso = Web4RelatorioAcesso::findorFail($id);
        return view('Web4RelatorioAcesso.edit',['Web4RelatorioAcesso'=>$Web4RelatorioAcesso]);
    }

     public function update(Request $request){
        Web4RelatorioAcesso::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4RelatorioAcesso')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4RelatorioAcesso::findorFail($id)->delete();
      return redirect('Web4RelatorioAcesso.index')->with('msg', 'Web4RelatorioAcesso apagada');
    }

    public function index(){
        $Web4RelatorioAcesso = Web4RelatorioAcesso::all();
        return view('Web4RelatorioAcesso.index',compact('Web4RelatorioAcesso'));
    }


    public function store(StoreWeb4RelatorioAcessoRequest $request){

        $Web4RelatorioAcesso = $request->all();
        Web4RelatorioAcesso::create($Web4RelatorioAcesso);       
        
    }
}
