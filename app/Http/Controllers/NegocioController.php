<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosEtapaRequest;
use App\Models\Web4Administradores;
use App\Models\Web4AdministradoresGrupo;
use App\Models\Web4NegociosAcoes;
use App\Models\Web4NegociosCategoria;
use App\Models\Web4NegociosEtapa;
use App\Models\Web4NegociosStatus;
use App\Models\Web4NegociosStatus2;
use App\Models\Web4Revenda;
use Illuminate\Http\Request;

/**
 * Summary of NegocioController
 */
class NegocioController extends Controller
{
    //
     public function create(){
    $Web4NegociosEtapa = Web4NegociosEtapa::get();
    return view('Web4NegociosEtapa.create',compact('Web4NegociosEtapa'));
    }

    public function edit($id){
        $Web4NegociosEtapa = Web4NegociosEtapa::findorFail($id);
        return view('Web4NegociosEtapa.edit',['Web4NegociosEtapa'=>$Web4NegociosEtapa]);
    }

     public function update(Request $request){
        Web4NegociosEtapa::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosEtapa')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosEtapa::findorFail($id)->delete();
      return redirect('Web4NegociosEtapa.index')->with('msg', 'Web4NegociosEtapa apagada');
    }

    public function index(){
        $Web4NegociosEtapa = Web4NegociosEtapa::all();
        $Web4Administradores = Web4Administradores::all();
        $Web4NegociosStatus = Web4NegociosStatus::all();
        $Web4NegociosStatus2 = Web4NegociosStatus2::all();
        $Web4NegociosAcoes = Web4NegociosAcoes::all();
        $Web4NegociosCategoria=Web4NegociosCategoria::all();
        $Web4AdministradoresGrupo = Web4AdministradoresGrupo::all();
        $Web4Revenda=Web4Revenda::all();
        return view('negocio.index',compact('Web4NegociosEtapa','Web4Administradores', 
        'Web4NegociosStatus', 'Web4NegociosStatus2',
         'Web4NegociosAcoes','Web4NegociosCategoria','Web4AdministradoresGrupo','Web4Revenda'));
    }


    /**
     * Summary of store
     * @param StoreWeb4NegociosEtapaRequest $request
     * @return void
     */
    public function store(StoreWeb4NegociosEtapaRequest $request){

        $Web4NegociosEtapa = $request->all();
        Web4NegociosEtapa::create($Web4NegociosEtapa);
                
    }
}
