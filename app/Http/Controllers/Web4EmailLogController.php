<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web4EmailLogController extends Controller
{
    //
     public function create(){
    $Web4emailsLog = Web4emailsLog::get();
    return view('Web4emailsLog.create',compact('Web4emailsLog'));
    }

    public function edit($id){
        $Web4emailsLog = Web4emailsLog::findorFail($id);
        return view('Web4emailsLog.edit',['Web4emailsLog'=>$Web4emailsLog]);
    }

     public function update(Request $request){
        Web4emailsLog::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4emailsLog')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4emailsLog::findorFail($id)->delete();
      return redirect('Web4emailsLog.index')->with('msg', 'Web4emailsLog apagada');
    }

    public function index(){
        $Web4emailsLog = Web4emailsLog::all();
        return view('Web4emailsLog.index',compact('Web4emailsLog'));
    }


    public function store(StoreWeb4emailsLogRequest $request){

        $Web4emailsLog = new Web4emailsLog();
        $Web4emailsLog->nome=$request->nome;
        $Web4emailsLog->timestamps=$request->timestamps;
        $Web4emailsLog->save();
        
    }
}
