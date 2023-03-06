<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaliedJobsController extends Controller
{
    //
     public function create(){
    $FailedJobs = FailedJobs::get();
    return view('FailedJobs.create',compact('FailedJobs'));
    }

    public function edit($id){
        $FailedJobs = FailedJobs::findorFail($id);
        return view('FailedJobs.edit',['FailedJobs'=>$FailedJobs]);
    }

     public function update(Request $request){
        FailedJobs::find($request->id)->update($request->except('_token'));
        return redirect('index/FailedJobs')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      FailedJobs::findorFail($id)->delete();
      return redirect('FailedJobs.index')->with('msg', 'FailedJobs apagada');
    }

    public function index(){
        $FailedJobs = FailedJobs::all();
        return view('FailedJobs.index',compact('FailedJobs'));
    }


    public function store(StoreFailedJobsRequest $request){

        $FailedJobs = new FailedJobs();
        $FailedJobs->nome=$request->nome;
        $FailedJobs->timestamps=$request->timestamps;
        $FailedJobs->save();
        
    }
}
