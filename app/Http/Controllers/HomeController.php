<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\schedules;
use App\Guide;
use App\Team;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id=Auth::user()->role;
      $schs=schedules::all();
      if($id==0){
        return view('home',compact('schs'));
      }
      elseif ($id==1) {
        $id=Auth::user()->id;
        $sub=Guide::where('uid',$id)->pluck('subject');
        $sec=Guide::where('uid',$id)->pluck('section');
        $teams=Team::where('subject',$sub[0])->where('section',$sec[0])->get();
        return view('home1',compact('teams','schs'));

      }
      else{
        return view('home2',compact('schs'));
      }
    }
}
