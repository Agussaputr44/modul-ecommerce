<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $products = Product::all();

        return view('pages.user.index', compact('products'));
    }
}
