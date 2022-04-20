<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Guide;
use App\Subject;
use App\User;

class GuideController extends Controller
{
    public function index()
    {
      $facs=Guide::orderBy('sem')->get();
      return view('guides.index',compact('facs'));
    }
    public function add()
    {
      $subs=Subject::all();
      return view('guides.add',compact('subs'));
    }
    public function store(Request $request)
    {
      $sub=Subject::find($request->id);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role'=>1,
            'password' => Hash::make($request->name),
        ]);
        $new=User::orderBy('created_at', 'desc')->first();

        Guide::create(['uid'=>$new->id,'name'=>$request->name,'email'=>$request->email,
        'subject'=>$sub['name'],'section'=>strtoupper($request->section),'sem'=>$sub['sem']]);
      return back();
    }
    public function update(Request $request)
    {
        $fac=Guide::find($request->id);
        $subs=Subject::all();
        return view('guides.update',compact('subs','fac'));
    }
    public function up(Request $request)
    {
        $sub=Subject::find($request->sub);
        $new=Guide::where('id',$request->id);

        $new->update(['uid'=>$request->uid,'name'=>$request->name,'email'=>$request->email,'subject'=>$sub['name'],'sem'=>$sub['sem']]);
        $facs=Guide::orderBy('sem')->get();
        return view('guides.index',compact('facs'));
    }
    public function delete(Request $request)
    {
      $new=Guide::where('id',$request->id);
      $new->forceDelete();
      $facs=Guide::orderBy('sem')->get();
      return view('guides.index',compact('facs'));
    }
}
