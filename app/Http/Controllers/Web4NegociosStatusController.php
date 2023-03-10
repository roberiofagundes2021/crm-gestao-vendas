<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosStatusRequest;
use Illuminate\Http\Request;
use App\Models\Web4NegociosStatus;

class Web4NegociosStatusController extends Controller
{
    //
     public function create(){
    $Web4NegociosStatus = Web4NegociosStatus::get();
    return view('Web4NegociosStatus.create',compact('Web4NegociosStatus'));
    }

    public function edit($id){
        $Web4NegociosStatus = Web4NegociosStatus::findorFail($id);
        return view('Web4NegociosStatus.edit',['Web4NegociosStatus'=>$Web4NegociosStatus]);
    }

     public function update(Request $request){
        Web4NegociosStatus::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosStatus')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosStatus::findorFail($id)->delete();
      return redirect('Web4NegociosStatus.index')->with('msg', 'Web4NegociosStatus apagada');
    }

    public function index(){
        $Web4NegociosStatus = Web4NegociosStatus::all();
        return view('Web4NegociosStatus.index',compact('Web4NegociosStatus'));
    }


    public function store(StoreWeb4NegociosStatusRequest $request){

        $Web4NegociosStatus = $request->all();
        Web4NegociosStatus::create($Web4NegociosStatus);
        
        
    }
}
