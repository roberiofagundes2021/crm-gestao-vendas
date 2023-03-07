<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreWeb4AdministradoresRequest;
use App\Http\Requests\StoreWebAdministradoresRequest;
use App\Models\Web4Administradores;

use Illuminate\Http\Request;

class Web4AdministradoresController extends Controller
{
    //
     public function create(){
    $Web4Administradores = Web4Administradores::get();
    return view('Web4Administradores.create',compact('Web4Administradores'));
    }

    public function edit($id){
        $Web4Administradores = Web4Administradores::findorFail($id);
        return view('Web4Administradores.edit',['Web4Administradores'=>$Web4Administradores]);
    }

     public function update(Request $request){
        Web4Administradores::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Administradores')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Administradores::findorFail($id)->delete();
      return redirect('Web4Administradores.index')->with('msg', 'Web4Administradores apagada');
    }

    public function index(){
        $Web4Administradores = Web4Administradores::all();
        return view('Web4Administradores.index',compact('Web4Administradores'));
    }


    public function store(StoreWebAdministradoresRequest $request){

        $Web4Administradores = new Web4Administradores();
            $Web4Administradores->$request->Codigo;
            $Web4Administradores->$request->CodigoImportacao;
            $Web4Administradores->$request->ImportacaoTipo;
            $Web4Administradores->$request->ImportacaoCodigo;
            $Web4Administradores->$request->CodigoRevenda;
            $Web4Administradores->$request->Status;
            $Web4Administradores->$request->IsDeletado;
            $Web4Administradores->$request->DataCadastro;
            $Web4Administradores->$request->IP;
            $Web4Administradores->$request->IsEditar;
            $Web4Administradores->$request->UltimoAcesso;
            $Web4Administradores->$request->Nome;
            $Web4Administradores->$request->Email;
            $Web4Administradores->$request->Usuario;
            $Web4Administradores->$request->Senha;
            $Web4Administradores->$request->CodigoGrupo;
            $Web4Administradores->$request->CodigoDepartamento;
            $Web4Administradores->$request->CodigoCargo;
            $Web4Administradores->$request->EndEstado;
            $Web4Administradores->$request->EndCidade;
            $Web4Administradores->$request->EndBairro;
            $Web4Administradores->$request->EndLogradouro;
            $Web4Administradores->$request->EndComplemento;
            $Web4Administradores->$request->EndCEP;
            $Web4Administradores->$request->EndNumero;
            $Web4Administradores->$request->TelefoneFixo;
            $Web4Administradores->$request->TelefoneCelular;
            $Web4Administradores->$request->TelefoneFax;
            $Web4Administradores->$request->RedesFacebook;
            $Web4Administradores->$request->RedesTwitter;
            $Web4Administradores->$request->RedesLinkedIn;
            $Web4Administradores->$request->RedesSkype;
            $Web4Administradores->$request->RedesMSN;
            $Web4Administradores->$request->Foto;
            $Web4Administradores->$request->Observacao;
            $Web4Administradores->$request->IsRevendas;
            $Web4Administradores->$request->IsEtapas;
            $Web4Administradores->$request->IsResponsavel;
            $Web4Administradores->$request->IsGrupo;
            $Web4Administradores->$request->IsNegociosSemResponsavel;
            $Web4Administradores->$request->IsRe;
            $Web4Administradores->$request->Tipo;
            $Web4Administradores->$request->NegociosDDDsNegar;
            $Web4Administradores->$request->NegociosEstadosNegar;
            $Web4Administradores->$request->DisAviNLgnUltimoAviso;
            $Web4Administradores->$request->DisAviNLgnIs;
        $Web4Administradores->save();
        
    }
}
