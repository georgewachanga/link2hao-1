<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;
use App\Location;
use App\Category;

use Auth;

class PropertyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $properties = Property::all();
        return view('properties.index')->with('properties', $properties);
    }

    public function create()
    {
        $locations  = Location::lists('locationName','id');
        $categories = Category::lists('categoryName','id');
        return view('properties.create')->with('locations',$locations)->with('categories',$categories);
    }

    public function store(Request $request){
        $this->validate($request, array(
            'name' => 'required',
            'location_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'
        ));

        $property = new Property([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'location_id' => $request->location_id,
            'category_id' => $request->category_id
        ]);

        if($owner = Auth::user()->getUser()){
            $owner->properties()->add($property);
            return redirect()->route('property.show', $property->id);
        }
        else{
            return redirect('/owner')->with('error','we do not have a record of you are an owner');
        }


    }
}
