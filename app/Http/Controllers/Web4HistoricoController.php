<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4HistoricoRequest;
use Illuminate\Http\Request;
use App\Models\Web4Historico;

class Web4HistoricoController extends Controller
{
    //
    public function create()
    {
        $Web4Historico = Web4Historico::get();
        return view('Web4Historico.create', compact('Web4Historico'));
    }

    public function edit($id)
    {
        $Web4Historico = Web4Historico::findorFail($id);
        return view('Web4Historico.edit', ['Web4Historico' => $Web4Historico]);
    }

    public function update(Request $request)
    {
        Web4Historico::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Historico')->with('msg', 'alteração realdizado com sucesso');

    }

    public function destroy($id)
    {
        Web4Historico::findorFail($id)->delete();
        return redirect('Web4Historico.index')->with('msg', 'Web4Historico apagada');
    }

    public function index()
    {
        $Web4Historico = Web4Historico::all();
        return view('Web4Historico.index', compact('Web4Historico'));
    }


    public function store(StoreWeb4HistoricoRequest $request)
    {

        $Web4Historico = new Web4Historico();
        $Web4Historico->$request->comment;
        $Web4Historico->$request->Codigo;
        $Web4Historico->$request->CodigoTarefa;
        $Web4Historico->$request->IsDeletado;
        $Web4Historico->$request->DestinoCodigo;
        $Web4Historico->$request->DestinoTipo;
        $Web4Historico->$request->DataCadastro;
        $Web4Historico->$request->IP;
        $Web4Historico->$request->OrigemTipo;
        $Web4Historico->$request->OrigemCodigo;
        $Web4Historico->$request->Mensagem;
        $Web4Historico->$request->CodigoPessoa;
        $Web4Historico->$request->DestinoCodigo;
        $Web4Historico->$request->OrigemTipo;
        $Web4Historico->$request->timestamps;
        $Web4Historico->save();

    }
}