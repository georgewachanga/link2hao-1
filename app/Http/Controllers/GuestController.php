<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guest;
use Auth;

use App\Http\Requests;

class GuestController extends Controller
{
    /**
     * the construct method runs before any other method in the class.
     * the auth middleware checks if user is logged in the redirect a non logged
     * in user to the login page
     */

    public function __construct()
    {
        $this->middleware("auth");

    }

    /**
     *
     */
    public function index()
    {
        if(Auth::user()->isGuest()){
            return view('guest.index');
        }else{
            return redirect("/guest/create");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.create');
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
            'hometown'=>'required',
        ));
        $guest = new guest([
            'phone' => $request->phone,
            'idno' => $request->idno,
            'hometown' => $request->hometown,
        ]);

        //  $owner->email=$request->email;
        //$owner->password=$request->password;
        $guest->user()->save(Auth::user());
        return redirect()->route('guest.show', $guest->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($guest = guest::find($id))
            return view("guest.show")->with('guest', $guest);
        return view('guest.index')->with('error', 'the user was not found in our records');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = guest::find($id);
        return view('guest.edit')->with('guest', $guest);
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
