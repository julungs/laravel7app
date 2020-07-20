<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function home()
    {
        $tabName = 'Home';
        return view('index', ['title' => $tabName,]);
    }

    public function about()
    {
        $tabName = 'About';
        return view('about', ['title' => $tabName]);
    }
}
