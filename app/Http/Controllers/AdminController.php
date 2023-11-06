<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $data  = User::where('role','company')->count();
        return view('admin.dashboard',compact('data'));
    }
}
