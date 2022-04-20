@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/home">back</a></div>

                <div class="card-body">


                  <div class="table-responsive">
  <table class="table">
  <tr>
    <th>Semester</th>
      <th>Section</th>
    <th>PBL Subject</th>
    <th>Faculty Incharge</th>
    <th >Total Projects</th>

  @foreach($facs as $fac)
  <tr>
    <td>{{$fac->sem}}</td>
    <td>{{$fac->section}}</td>
    <td>{{$fac->subject}}</td>
    <td>Prof.{{$fac->name}}</td>
    <td><?php
        $iname=App\Team::tp($fac->subject,$fac->section);
        echo $iname;
        ?></td>

  </tr>
  @endforeach

  <tr>

    <td rowspan="4"><b>Total</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td><b><?php
        $iname=App\Team::ttp();
        echo $iname;
        ?></b></td>
  </tr>

</table><hr>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
