<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller {
    public function index(){
        $prodotti = Product::all();
        // dd($prodotti);
        return view("home", ["prodotti"=> $prodotti]);
    }
}
