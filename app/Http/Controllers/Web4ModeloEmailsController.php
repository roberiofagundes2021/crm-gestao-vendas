<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeb4ModeloEmailsRequest;
use Illuminate\Http\Request;
use App\Models\Web4ModeloEmails;

class Web4ModeloEmailsController extends Controller
{
    //
     public function create(){
    $Web4ModeloEmails = Web4ModeloEmails::get();
    return view('Web4ModeloEmails.create',compact('Web4ModeloEmails'));
    }

    public function edit($id){
        $Web4ModeloEmails = Web4ModeloEmails::findorFail($id);
        return view('Web4ModeloEmails.edit',['Web4ModeloEmails'=>$Web4ModeloEmails]);
    }

     public function update(Request $request){
        Web4ModeloEmails::find($request->id)->update($request->except('_token'));
        return redirect('index/Web4ModeloEmails')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Web4ModeloEmails::findorFail($id)->delete();
      return redirect('Web4ModeloEmails.index')->with('msg', 'Web4ModeloEmails apagada');
    }

    public function index(){
        $Web4ModeloEmails = Web4ModeloEmails::all();
        return view('Web4ModeloEmails.index',compact('Web4ModeloEmails'));
    }


    public function store(StoreWeb4ModeloEmailsRequest $request){

        $Web4ModeloEmails =$request->all();
        Web4ModeloEmails::create($Web4ModeloEmails);        
    }
}
