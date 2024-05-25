<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsulController extends Controller
{
    public function index()
    {
        return view('consultation');
    }
}
