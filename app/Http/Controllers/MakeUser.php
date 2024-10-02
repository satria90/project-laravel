<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MakeUser extends Controller
{
    public function index(){
        $role = auth()->user()->role;
        if ($role == 'admin') {
            return view('makeuser.create_user');
        } 
    }

    public function store(){
        $role = auth()->user()->role;
        if ($role == 'admin') {
            return view('makeuser.create_user');
        } 
    }
}
