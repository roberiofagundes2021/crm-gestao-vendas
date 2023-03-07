<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4InformativoRevendaRequest;
use Illuminate\Http\Request;
use App\Models\Web4InformativoRevenda;

class Web4InformativoRevendaController extends Controller
{
    //
    public function create()
    {
        $Web4InformativoRevenda = Web4InformativoRevenda::get();
        return view('Web4InformativoRevenda.create', compact('Web4InformativoRevenda'));
    }

    public function edit($id)
    {
        $Web4InformativoRevenda = Web4InformativoRevenda::findorFail($id);
        return view('Web4InformativoRevenda.edit', ['Web4InformativoRevenda' => $Web4InformativoRevenda]);
    }

    public function update(Request $request)
    {
        Web4InformativoRevenda::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4InformativoRevenda')->with('msg', 'alteração realdizado com sucesso');

    }

    public function destroy($id)
    {
        Web4InformativoRevenda::findorFail($id)->delete();
        return redirect('Web4InformativoRevenda.index')->with('msg', 'Web4InformativoRevenda apagada');
    }

    public function index()
    {
        $Web4InformativoRevenda = Web4InformativoRevenda::all();
        return view('Web4InformativoRevenda.index', compact('Web4InformativoRevenda'));
    }


    public function store(StoreWeb4InformativoRevendaRequest $request)
    {

        $Web4InformativoRevenda=$request->all();
        Web4InformativoRevenda::create($Web4InformativoRevenda);

    }
}