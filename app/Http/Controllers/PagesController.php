<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accueil()
    {
        return view('accueil.accueil');
    }

    public function about()
    {
        return view('About.about');
    }

    public function contact()
    {
        return view('Contact.contact');
    }
}
