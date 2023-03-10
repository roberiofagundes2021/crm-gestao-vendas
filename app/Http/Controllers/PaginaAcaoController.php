<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaginaAcaoRequest;
use App\Models\PaginaAcao;
use Illuminate\Http\Request;

class PaginaAcaoController extends Controller
{
    //
     public function create(){
    $PaginaAcao = PaginaAcao::get();
    return view('PaginaAcao.create',compact('PaginaAcao'));
    }

    public function edit($id){
        $PaginaAcao = PaginaAcao::findorFail($id);
        return view('PaginaAcao.edit',['PaginaAcao'=>$PaginaAcao]);
    }

     public function update(Request $request){
        PaginaAcao::find($request->id)->update($request->except('_token'));
        return redirect('index/PaginaAcao')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      PaginaAcao::findorFail($id)->delete();
      return redirect('PaginaAcao.index')->with('msg', 'PaginaAcao apagada');
    }

    public function index(){
        $PaginaAcao = PaginaAcao::all();
        return view('PaginaAcao.index',compact('PaginaAcao'));
    }


    public function store(StorePaginaAcaoRequest $request){

        $PaginaAcao = new PaginaAcao();
        $PaginaAcao->$request->comment;
        $PaginaAcao->$request->Codigo;
        $PaginaAcao->$request->CodigoPagina;
        $PaginaAcao->$request->Nome;
        $PaginaAcao->$request->CodNome;
        $PaginaAcao->save();
        
    }
}
