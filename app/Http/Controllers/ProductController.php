<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        $productsData = Product::all();

        return view("pages.products", compact("productsData"));
    }
}

