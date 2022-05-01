<?php

namespace App\Http\Controllers;

use App\Models\Rashifal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RashifalController extends Controller
{

    public function list()
    {
        $rashifal = Rashifal::all();
        return view('rasifaal.list', ['rashifal' => $rashifal]);
    }

    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $rashifal = new Rashifal();
            $rashifal->date = str_replace('-', '', $request->date);
            $rashifal->mesh = $request->mesh;
            $rashifal->brish = $request->brish;
            $rashifal->mithun = $request->mithun;
            $rashifal->karkat = $request->karkat;
            $rashifal->singha = $request->singha;
            $rashifal->kanya = $request->kanya;
            $rashifal->tula = $request->tula;
            $rashifal->brischik = $request->brischik;
            $rashifal->dhanu = $request->dhanu;
            $rashifal->makar = $request->makar;
            $rashifal->kumbha = $request->kumbha;
            $rashifal->min = $request->min;
            $rashifal->save();
            //dd($rashifal);
            return back()->with('message', 'Rashifal Addedd Successfully');
        } else {
            return view('rasifaal.add');
        }
    }

    public function update(Rashifal $rashifal, Request $request)
    {
        if ($request->getMethod() == "POST") {
            $rashifal->date = str_replace('-', '', $request->date);
            $rashifal->mesh = $request->mesh;
            $rashifal->brish = $request->brish;
            $rashifal->mithun = $request->mithun;
            $rashifal->karkat = $request->karkat;
            $rashifal->singha = $request->singha;
            $rashifal->kanya = $request->kanya;
            $rashifal->tula = $request->tula;
            $rashifal->brischik = $request->brischik;
            $rashifal->dhanu = $request->dhanu;
            $rashifal->makar = $request->makar;
            $rashifal->kumbha = $request->kumbha;
            $rashifal->min = $request->min;
            $rashifal->save();
            // dd($rashifal);
            return back()->with('message', 'Rashifal Updated Successfully');
            // return $request->all();
        } else {
            return view('rasifaal.edit', ['rashifal' => $rashifal]);
        }
    }

    public function apiListRashifal(Request $request)
    {
        $rashifal = DB::table('rashifals')->where('date', $request->date)->first();
        return response()->json($rashifal);
    }
}
