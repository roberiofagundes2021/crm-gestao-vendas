<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4emailsLogRequest;
use Illuminate\Http\Request;
use App\Models\Web4emailsLog;

class Web4EmailLogController extends Controller
{
    //
    public function create()
    {
        $Web4emailsLog = Web4emailsLog::get();
        return view('Web4emailsLog.create', compact('Web4emailsLog'));
    }

    public function edit($id)
    {
        $Web4emailsLog = Web4emailsLog::findorFail($id);
        return view('Web4emailsLog.edit', ['Web4emailsLog' => $Web4emailsLog]);
    }

    public function update(Request $request)
    {
        Web4emailsLog::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4emailsLog')->with('msg', 'alteração realdizado com sucesso');

    }

    public function destroy($id)
    {
        Web4emailsLog::findorFail($id)->delete();
        return redirect('Web4emailsLog.index')->with('msg', 'Web4emailsLog apagada');
    }

    public function index()
    {
        $Web4emailsLog = Web4emailsLog::all();
        return view('Web4emailsLog.index', compact('Web4emailsLog'));
    }


    public function store(StoreWeb4emailsLogRequest $request)
    {

        $Web4emailsLog = new Web4emailsLog();
        $Web4emailsLog->$request->comment;
        $Web4emailsLog->$request->Codigo;
        $Web4emailsLog->$request->OrigemTipo;
        $Web4emailsLog->$request->OrigemCodigo;
        $Web4emailsLog->$request->Data;
        $Web4emailsLog->$request->IP;
        $Web4emailsLog->$request->EmailPara;
        $Web4emailsLog->$request->Assunto;
        $Web4emailsLog->$request->Protocolo;
        $Web4emailsLog->$request->PastaSep;
        $Web4emailsLog->$request->IsAberto;
        $Web4emailsLog->$request->AbertoData;
        $Web4emailsLog->$request->AbertoIP;
        $Web4emailsLog->$request->AbertoRefer;
        $Web4emailsLog->$request->OrigemTipo;
        $Web4emailsLog->timestamps = $request->timestamps;
        $Web4emailsLog->save();

    }
}