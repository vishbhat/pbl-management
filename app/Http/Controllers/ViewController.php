<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Guide;
use App\Subject;
use Storage;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
      $id=Auth::user()->id;
      $sub=Guide::where('uid',$id)->pluck('subject');
      $teams=Team::where('subject',$sub[0])->get();
      return view('display.teams',compact('teams'));
    }
    public function viewteam(Request $request)
    {
      $new=Team::find($request->id);
      return view('display.teamview',compact('new'));
    }
    public function viewsynopsis($id)
    {

      $path="storage/synopsis/Team".$id."_synopsis.pdf";
      header('content-type:application/pdf');
      echo file_get_contents($path);

    }
    public function viewreport($id)
    {
      $path="storage/reports/Team".$id."_report.pdf";
      header('content-type:application/pdf');
      echo file_get_contents($path);
    }
    public function teamsadmin()
    {
      $subs=Subject::all()->pluck('name');
      return view('display.adminteamsindex',compact('subs'));
    }
    public function teamview($id)
    {
      $teams=Team::where('subject',$id)->get();
      return view('display.adminsubview',compact('teams'));
    }
    public function adminteam(Request $request)
    {
      $new=Team::find($request->id);
      return view('display.adminteamview',compact('new'));
    }
    public function report()
    {
      $facs=Guide::orderBy('sem')->get();

      return view('display.report',compact('facs'));
    }
  
}
