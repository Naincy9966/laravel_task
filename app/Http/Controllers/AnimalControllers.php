<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalControllers extends Controller
{
    public function index(){
        return view('pages.animals.index');
    }

    public function create(Request $request){
        return view('pages.animals.create');
    }
}
