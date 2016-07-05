<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Owner;
use Auth;

class ownerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct()
    {
        Auth::check();
    }


    public function index()
    {
        return view('owner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            //'fname'=>'required',
            // 'lname'=>'required',
            'phone'=>'required',
            'idno'=>'required',
            'location'=>'required',
           // 'email'=>'required',
           // 'password'=>'required'
        ));


        //store
        $owner=new owner();
        //$owner->fname=$request->fname;
       // $owner->lname=$request->lname;
        $owner->phone=$request->phone;
        $owner->idno=$request->idno;
        $owner->location=$request->location;
      //  $owner->email=$request->email;
        //$owner->password=$request->password;
        $owner->save();
        return redirect()->route('admin.owner.show', $owner->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
