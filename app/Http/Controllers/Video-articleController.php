<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoArticleController extends Controller
{
    public function index()
    {
        return view('video-article');
    }
}
