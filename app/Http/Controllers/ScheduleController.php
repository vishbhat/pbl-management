<?php

namespace App\Http\Controllers;

use App\schedules;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $schs=schedules::all();
         return view('schedule.index',compact('schs'));
     }

     public function add()
    {
        return view('schedule.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      schedules::create(['date'=>$request->date,'task'=>$request->task]);
    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function show(schedules $schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function edit(schedules $schedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $sch=schedules::find($request->id);
          return view('schedule.update',compact('sch'));
    }

    public function up(Request $request)
    {
      $new=schedules::where('id',$request->id);
      $new->update(['date'=>$request->date,'task'=>$request->task]);
      $schs=schedules::all();
       return view('schedule.index',compact('schs'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
      $new=schedules::where('id',$request->id);
      $new->forceDelete();
      $schs=schedules::all();
       return view('schedule.index',compact('schs'));
    }
}
