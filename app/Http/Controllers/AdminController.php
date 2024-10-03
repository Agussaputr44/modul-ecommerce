<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $products = Product::count();
        $users = User::count();

        return view('pages.admin.index', compact('products', 'users'));
    }
}

