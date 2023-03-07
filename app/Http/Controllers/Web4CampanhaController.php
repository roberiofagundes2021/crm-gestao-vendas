<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4CampanasRequest;
use Illuminate\Http\Request;
use App\Models\Web4Campanas;

class Web4CampanhaController extends Controller
{
    //
     public function create(){
    $Web4Campanas = Web4Campanas::get();
    return view('Web4Campanas.create',compact('Web4Campanas'));
    }

    public function edit($id){
        $Web4Campanas = Web4Campanas::findorFail($id);
        return view('Web4Campanas.edit',['Web4Campanas'=>$Web4Campanas]);
    }

     public function update(Request $request){
        Web4Campanas::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Campanas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Campanas::findorFail($id)->delete();
      return redirect('Web4Campanas.index')->with('msg', 'Web4Campanas apagada');
    }

    public function index(){
        $Web4Campanas = Web4Campanas::all();
        return view('Web4Campanas.index',compact('Web4Campanas'));
    }


    public function store(StoreWeb4CampanasRequest $request){

        $Web4Campanas = new Web4Campanas();
         $Web4Campanas->$request->comment;
             $Web4Campanas->$request->Codigo;
             $Web4Campanas->$request->IsDeletado;
             $Web4Campanas->$request->DataCadastro;
             $Web4Campanas->$request->IP;
             $Web4Campanas->$request->Assunto;
             $Web4Campanas->$request->Mensagem;
             $Web4Campanas->$request->Status;
             $Web4Campanas->$request->EmailsQtd;
             $Web4Campanas->$request->EmailsAtual;
             $Web4Campanas->$request->DataUltimoEnvio;
             $Web4Campanas->$request->Tipo;
             $Web4Campanas->$request->CodigoStatus;
             $Web4Campanas->$request->CodigoEtapa;
             $Web4Campanas->$request->DataCadastroDe;
             $Web4Campanas->$request->DataCadastroAte;
             $Web4Campanas->$request->DataCadastroIs;
             $Web4Campanas->$request->ResponderParaNome;
             $Web4Campanas->$request->ResponderParaEmail;
             $Web4Campanas->$request->IsDeletado;
        $Web4Campanas->save();
        
    }
}
