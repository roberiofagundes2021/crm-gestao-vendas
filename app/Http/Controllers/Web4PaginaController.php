<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4PaginaRequest;
use Illuminate\Http\Request;
use App\Models\Web4Pagina;

class Web4PaginaController extends Controller
{
    //
     public function create(){
    $Web4Pagina = Web4Pagina::get();
    return view('Web4Pagina.create',compact('Web4Pagina'));
    }

    public function edit($id){
        $Web4Pagina = Web4Pagina::findorFail($id);
        return view('Web4Pagina.edit',['Web4Pagina'=>$Web4Pagina]);
    }

     public function update(Request $request){
        Web4Pagina::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4Pagina')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4Pagina::findorFail($id)->delete();
      return redirect('Web4Pagina.index')->with('msg', 'Web4Pagina apagada');
    }

    public function index(){
        $Web4Pagina = Web4Pagina::all();
        return view('Web4Pagina.index',compact('Web4Pagina'));
    }


    public function store(StoreWeb4PaginaRequest $request){

        $Web4Pagina = new Web4Pagina();
        $Web4Pagina->nome=$request->nome;
        $Web4Pagina->timestamps=$request->timestamps;
        $Web4Pagina->save();
        
    }
}
