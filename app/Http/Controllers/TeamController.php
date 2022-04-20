<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Subject;
use App\schedules;
use Storage;
use Illuminate\Support\Facades\Auth;


class TeamController extends Controller
{
    public function index()
    {
      $id=Auth::user()->id;
      $new=Team::pluck('uid');
      $schs=schedules::all();
      foreach ($new as $key ) {
        if($key==$id)
        {
          echo '<script language="javascript">';
          echo 'alert("Teams already submitted")';
          echo '</script>';
          return view('home2',compact('schs'));
        }
      }


      $subs=Subject::all()->pluck('name');
      $sid=Team::all()->pluck('uid');
      return view('teams.index',compact('subs'));
    }
    public function add(Request $request)
    {
        $schs=schedules::all();
      $id=Auth::user()->id;
      $sem=Subject::where('name',$request->subject)->pluck('sem');

      Team::create(['uid'=>$id,'name1'=>$request->name1,'usn1'=>$request->usn1,
      'name2'=>$request->name2,'usn2'=>$request->usn2,'subject'=>$request->subject,'sem'=>$sem[0],
      'section'=>strtoupper($request->section),'topic'=>$request->topic]);
      return view('home2',compact('schs'));
    }
    public function synopsis()
    {
      return view('teams.synopsis');
    }
    public function storeUploadFile(Request $request){
       $id=Auth::user()->id;
       $new=Team::where('uid',$id)->get();
       $sid=$new[0]['id'];
       $file = $request->file('image')->storeAs('public\synopsis', "Team".$sid."_synopsis.pdf");
       $schs=schedules::all();
       return view('home2',compact('schs'));

    }
    public function report()
    {
      return view('teams.reports');
    }
    public function storeUploadFile1(Request $request){
      $id=Auth::user()->id;
      $new=Team::where('uid',$id)->get();
      $sid=$new[0]['id'];
       $file = $request->file('image')->storeAs('public\reports',"Team".$sid."_report.pdf");
       $schs=schedules::all();
       return view('home2',compact('schs'));

    }
}
