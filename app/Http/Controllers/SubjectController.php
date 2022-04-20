<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
      $subs=Subject::orderBy('sem')->get();
      return view('subjects.index',compact('subs'));
    }
    public function add()
    {
      return view('subjects.add');
    }
    public function store(Request $request)
    {
      Subject::create(['name'=>$request->name,'sem'=>$request->sem]);
    return back();
    }
    public function update(Request $request)
    {
        $sub=Subject::find($request->id);
        return view('subjects.update',compact('sub'));
    }
    public function up(Request $request)
    {
        $new=Subject::where('id',$request->id);
        $new->update(['name'=>$request->name,'sem'=>$request->sem]);
        $subs=Subject::orderBy('sem')->get();
        return view('subjects.index',compact('subs'));
    }
    public function delete(Request $request)
    {
      $new=Subject::where('id',$request->id);
      $new->forceDelete();
      $subs=Subject::orderBy('sem')->get();
      return view('subjects.index',compact('subs'));
    }
}
