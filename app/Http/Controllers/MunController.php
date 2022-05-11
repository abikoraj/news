<?php

namespace App\Http\Controllers;

use App\Models\mun;
use App\Models\position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MunController extends Controller
{
    public function index()
    {
        $muns = DB::table('muns')->get();
        return view('mun.index', compact('muns'));
    }

    public function apiMunList()
    {
        $mun = DB::table('muns')->get();
        return response()->json($mun);
    }

    public function add(Request $request)
    {
        $mun = new mun();
        $mun->name = $request->name;
        $mun->ward_nos = $request->ward_nos;
        $mun->save();
        return redirect()->back();
    }
    public function update(Request $request)
    {
        $mun = Mun::where('id', $request->id)->first();
        $mun->name = $request->name;
        $mun->ward_nos = $request->ward_nos;
        $mun->save();
        return redirect()->back();
    }
    public function del(Request $request)
    {
        $mun = Mun::where('id', $request->id)->first();
        $mun->delete();
        return redirect()->back();
    }
    public function candi_add($mun, $ward, $position)
    {
        return view('mun.add_candidate', compact('mun', 'ward', 'position'));
    }

    public function candi_submit(Request $request)
    {
        $candi = new position();
        if ($request->hasFile('image')) {
            $candi->image = $request->image->store('data/candi-img');
        } else {
            $candi->image = $request->image;
        }
        $candi->min_id = $request->min_id;
        $candi->ward_id = $request->ward_id;
        $candi->name = $request->name;
        $candi->identity = $request->identity;
        $candi->party = $request->party;
        $candi->votes = $request->votes;
        dd($candi);
        // $candi->save();
        return back();
    }

    public function apiCandiList()
    {
        $candi = DB::table('positions')->get();
        return response()->json($candi);
    }

    public function mayor_list(Mun $mun)
    {
        $mayor = DB::table('positions')->where('identity', 1)->where('min_id', $mun->id)->get();
        return view('mun.list-mayor', ['mayor' => $mayor, 'mun' => $mun]);
    }
    public function viceMayor_list(Mun $mun)
    {
        $vmayor = DB::table('positions')->where('identity', 2)->where('min_id', $mun->id)->get();
        return view('mun.list-vice-mayor', ['vmayor' => $vmayor, 'mun' => $mun]);
    }
    public function ward_list(mun $mun)
    {
        return view('mun.list-ward', ['mun' => $mun]);
    }
    public function head_list(Mun $mun, $ward)
    {
        $head = DB::table('positions')->where('min_id', $mun->id)->where('ward_id', $ward)->where('identity', 3)->get();
        return view('mun.list-head', ['head' => $head, 'mun' => $mun]);
    }

    public function del_candi(position $position)
    {
        $position->delete();
        return back();
    }
}
