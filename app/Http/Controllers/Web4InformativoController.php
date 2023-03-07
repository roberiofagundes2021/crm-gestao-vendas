<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4InformativoRequest;
use Illuminate\Http\Request;
use App\Models\Web4Informativo;

class Web4InformativoController extends Controller
{
    //
    public function create()
    {
        $Web4Informativo = Web4Informativo::get();
        return view('Web4Informativo.create', compact('Web4Informativo'));
    }

    public function edit($id)
    {
        $Web4Informativo = Web4Informativo::findorFail($id);
        return view('Web4Informativo.edit', ['Web4Informativo' => $Web4Informativo]);
    }

    public function update(Request $request)
    {
        Web4Informativo::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Informativo')->with('msg', 'alteração realdizado com sucesso');

    }

    public function destroy($id)
    {
        Web4Informativo::findorFail($id)->delete();
        return redirect('Web4Informativo.index')->with('msg', 'Web4Informativo apagada');
    }

    public function index()
    {
        $Web4Informativo = Web4Informativo::all();
        return view('Web4Informativo.index', compact('Web4Informativo'));
    }


    public function store(StoreWeb4InformativoRequest $request)
    {

        $Web4Informativo = new Web4Informativo();
        $Web4Informativo->$request->comment;
        $Web4Informativo->$request->Codigo;
        $Web4Informativo->$request->Status;
        $Web4Informativo->$request->IsDeletado;
        $Web4Informativo->$request->DataCadastro;
        $Web4Informativo->$request->IP;
        $Web4Informativo->$request->Titulo;
        $Web4Informativo->$request->Texto;
        $Web4Informativo->$request->IsTipo;
        $Web4Informativo->$request->Link;
        $Web4Informativo->$request->Data;
        $Web4Informativo->$request->Video;
        $Web4Informativo->$request->FotoCapa;
        $Web4Informativo->$request->IsDeletado;
        $Web4Informativo->$request->IsDeletado;
        $Web4Informativo->$request->timestamps;
        $Web4Informativo->save();

    }
}