<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $homeData = Home::all();
        return view("pages.home", compact("homeData"));
    }
}