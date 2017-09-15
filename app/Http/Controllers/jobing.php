<?php

namespace App\Http\Controllers;

use App\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;


class jobing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("new-customer");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function customer(){

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $j = new jobs;
        $j->owner_id = Auth::user()->id;
        $j->Name = Input::get('Name');
        $j->Mobile = Input::get('Mobile');
        $j->Work = Input::get('Work');
        $j->Complete_Date = Input::get('Complete_Date');
        $j->Amount = Input::get('Amount');
        $j->save();

        session()->flash('notif','Successfully saved the record.');

        return redirect(url('new-customer'));
//        return Input::get('Name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = jobs::where('Id',$id)->get()->first();
        return view('update-customer', [
            'job' => $job
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('update-customer',compact($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $j = jobs::find($id);

        $name=$request->Name;
        $mobile=$request->Mobile;
        $work=$request->Work;
        $complete=$request->Complete_Date;
        $Amount=$request->Amount;

        DB::update("update jobs set Name='$name',Mobile='$mobile',Work='$work',Complete_Date='$complete',Amount='$Amount' where Id=$id");

       return redirect(url('dashboard'));
    }

    ///////////////////////////////////////////////////////////////////

    public function save(Request $request, $id){

        $status = $request->status_option;
        DB::update("update jobs set status='$status' where Id=$id");

        return redirect(url('dashboard'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /* SMS Function */

}
