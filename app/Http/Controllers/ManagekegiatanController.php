<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagekegiatanController extends Controller
{
    public function index()
    {
        return view('manage-kegiatan');
    }
}
