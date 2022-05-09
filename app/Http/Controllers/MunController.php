<?php

namespace App\Http\Controllers;

use App\Models\mun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MunController extends Controller
{
    public function index()
    {
        $muns=DB::table('muns')->get();
        return view('mun.index',compact('muns'));
    }

    public function add(Request $request)
    {
        $mun=new mun();
        $mun->name=$request->name;
        $mun->save();
        return redirect()->back();

    }
    public function update(Request $request)
    {
        $mun=Mun::where('id',$request->id)->first();
        $mun->name=$request->name;
        $mun->save();
        return redirect()->back();
    }
    public function del(Request $request)
    {
        $mun=Mun::where('id',$request->id)->first();
        $mun->delete();
        return redirect()->back();
    }
}
