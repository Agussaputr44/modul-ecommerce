<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
        $admins = Admin::all();
        $users = User::all();

        return view('pages/user/index', compact('admins', 'users'));
    }
}
