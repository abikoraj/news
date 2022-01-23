<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function add()
    {
        return view('news.add');
    }

    public function submit(Request $request)
    {
        $news = new News();
        if ($request->hasFile('image')) {
            $news->image = $request->image->store('data/fet-img', 'public');
        }
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        $news->link = $request->link;
        // dd($news);
        $news->save();
        return back()->with('message', 'News Published Successfully!');
    }
}
