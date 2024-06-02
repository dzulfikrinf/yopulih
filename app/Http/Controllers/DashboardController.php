<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Video;
use App\Models\Question;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.index');
    }

    public function videoArtikel(Request $request)
    {
        $articles = Article::all();
        $videos = Video::all();
        return view('dashboard.videoArtikel', compact('articles', 'videos'));
    }

    public function videoArtikelSlug($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('dashboard.videoArtikelSlug', compact('article'));
    }

    public function forum(Request $request)
    {
        $posts = Post::with(['comments.author', 'author'])->get();
        return view('dashboard.forum', compact('posts'));
    }

    public function forumSlug($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('dashboard.forumSlug', compact('post'));
    }

    public function stressTest(Request $request)
    {
        $questions = Question::all();
        return view('dashboard.stressTest', compact('questions'));
    }
}
