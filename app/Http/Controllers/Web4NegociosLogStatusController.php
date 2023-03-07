<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4NegociosLogStatusRequest;
use Illuminate\Http\Request;
use App\Models\Web4NegociosLogStatus;

class Web4NegociosLogStatusController extends Controller
{
    //
     public function create(){
    $Web4NegociosLogStatus = Web4NegociosLogStatus::get();
    return view('Web4NegociosLogStatus.create',compact('Web4NegociosLogStatus'));
    }

    public function edit($id){
        $Web4NegociosLogStatus = Web4NegociosLogStatus::findorFail($id);
        return view('Web4NegociosLogStatus.edit',['Web4NegociosLogStatus'=>$Web4NegociosLogStatus]);
    }

     public function update(Request $request){
        Web4NegociosLogStatus::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4NegociosLogStatus')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4NegociosLogStatus::findorFail($id)->delete();
      return redirect('Web4NegociosLogStatus.index')->with('msg', 'Web4NegociosLogStatus apagada');
    }

    public function index(){
        $Web4NegociosLogStatus = Web4NegociosLogStatus::all();
        return view('Web4NegociosLogStatus.index',compact('Web4NegociosLogStatus'));
    }


    public function store(StoreWeb4NegociosLogStatusRequest $request){

        $Web4NegociosLogStatus = $request->all();
        Web4NegociosLogStatus::create($Web4NegociosLogStatus);
    
        
    }
}
