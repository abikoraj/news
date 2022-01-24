<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $latest = DB::table('news')->get();
        return view('index', ['news' => $latest]);
    }
}
