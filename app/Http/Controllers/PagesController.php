<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function getIndex()
    {
        return view('home.index');
    }
    public function getAbout()
    {
        return view('home.about');
    }
    public function getContact()
    {
        return view('home.contact');
    }
    public function getGallery()
    {
        return view('home.gallery');
    }
    public function getNews()
    {
        return view('home.news');
    }
    public function getRooms()
    {
        return view('home.rooms');
    }
    public function getSingle()
    {
        return view('home.single');
    }
    public function getCategory()
    {
        return view('home.category');
    }
    public function getCarousel()
    {
        return view('home.carousel');
    }
    public function getAdvertise()
    {
        return view('home.advertise');
    }
    public function getReservation()
    {
        return view('home.reservation');
    }
    public function getServices()
    {
        return view('home.services');
    }


//admin////////////////////////////////////////////////////////////

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function getCharts()
    {
        return view('admin.Charts');
    }
    public function getCodes()
    {
        return view('admin.Codes');
    }

    public function getForms()
    {
        return view('admin.forms');
    }
    public function getGrids()
    {
        return view('admin.grids');
    }
    public function getInbox()
    {
        return view('admin.inbox');
    }
    public function getMedia()
    {
        return view('admin.media');
    }
    public function getTables()
    {
        return view('admin.tables');
    }
    public function getWidgets()
    {
        return view('admin.widgets');
    }
    public function getCompose()
    {
        return view('admin.compose');
    }
    public function getNewuser()
    {
        return view('admin.newuser');
    }


}