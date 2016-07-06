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
    public function __construct()
    {
        $this->middleware("auth");

    }


    public function index()
    {
        if(Auth::user()->isOwner()){
            $owner = Auth::user()->getUser();
            return view('owner.index')->with('owner',$owner);
        }else{
            return redirect("/owner/create");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.create');
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
            'phone'=>'required',
            'idno'=>'required',
            'location'=>'required',
        ));
        $owner=new owner([
            'phone' => $request->phone,
            'idno' => $request->idno,
            'location' => $request->location,
        ]);

      //  $owner->email=$request->email;
        //$owner->password=$request->password;
        $owner->save();
        $owner->user()->save(Auth::user());
        return redirect()->route('owner.show', $owner->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($owner = Owner::find($id))
            return view("owner.show")->with('owner', $owner);
        return view('owner.index')->with('error', 'the user was not found in our records');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('owner.edit')->with('owner', $owner);
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
