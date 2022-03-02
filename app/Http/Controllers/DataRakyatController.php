<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRakyatController extends Controller
{
    public function index()
    {
        return view('data.rakyat.index');
    }
}
