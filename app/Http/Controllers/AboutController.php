<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        
        $aboutData = About::all();

        return view("pages.about", compact("aboutData"));
    }
}