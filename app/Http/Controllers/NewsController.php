<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Notifications\facebookpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class NewsController extends Controller
{
    public function add($type)
    {
        return view('news.add', ['type' => $type]);
    }

    public function submit(Request $request, $type)
    {
        $news = new News();
        if ($type == 1) {
            if ($request->hasFile('image')) {
                $news->image = $request->image->store('data/fet-img');
            }
        } else {
            $news->link = $request->link;
            $url = parse_url($news->link);
            parse_str($url['query'], $query);
            $news->image = "https://img.youtube.com/vi/{$query['v']}/hqdefault.jpg";
        }
        $news->username = Auth::user()->name;
        $news->type = $type;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        // dd($news);
        $news->save();

        try {
            // $chat = env('chat_id ');
            // $news->notify((new facebookpost($news))->delay(now()->addMinute()));
            $news->notify(new facebookpost($news));
        } catch (\Throwable $th) {
            dd($th);
            //throw $th;
        }
        return back()->with('message', 'News Published Successfully!');
    }

    public function list()
    {
        $news = DB::table('news')->paginate(6);
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
            if ($news->type == 1) {
                if ($request->hasFile('image')) {
                    $news->image = $request->image->store('data/fet-img');
                }
            } else {
                $news->link = $request->link;
                $url = parse_url($news->link);
                parse_str($url['query'], $query);
                $news->image = "https://img.youtube.com/vi/{$query['v']}/mqdefault.jpg";
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
        if ($news->type != 1) {

            $url = parse_url($news->link);

            parse_str($url['query'], $query);
        } else {
            $query = [];
        }

        $news->count += 1;
        $news->save();
        return view('single', compact('news', 'query'));
    }

    public function apiList(Request $request)
    {
        $query = News::latest();

        if ($request->filled('category_id')) {
            $query = $query->where('category_id', $request->category_id);
        }
        return response()->json($query->paginate(6));
    }

    public function apiViewNews($id)
    {
        return response()->json(News::find($id));
    }
}
