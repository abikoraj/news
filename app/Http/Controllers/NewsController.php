<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function list()
    {
        $news = DB::table('news')->get();
        return view('news.list', ['news' => $news]);
    }

    public function delete(News $news)
    {
        $news->delete();
        return back()->with('message', 'News Deleted Successfully!');
    }

    public function update(News $news, Request $request)
    {
        if ($request->getMethod() == "POST") {
            if ($request->hasFile('image')) {
                $news->image = $request->image->store('data/fet-img', 'public');
            }
            $news->title = $request->title;
            $news->content = $request->content;
            $news->category_id = $request->category_id;
            $news->link = $request->link;
            // dd($news);
            $news->save();
            return redirect()->route('news.list')->with('message', 'News Updated Successfully!');
        } else {
            return view('news.edit', ['news' => $news]);
        }
    }

    public function view(News $news)
    {
        return view('single', ['news' => $news]);
    }
}
