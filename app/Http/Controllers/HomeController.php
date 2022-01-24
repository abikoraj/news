<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(5)->get();
        $popular = News::orderBy('count', 'desc')->take(5)->get();
        return view('index', compact('news', 'popular'));
    }
}
