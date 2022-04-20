@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <marquee behavior="scroll" direction="left">

                      Schedule:
                      @foreach($schs as $sch)
                    ----->{{$sch->task}}({{$sch->date}})
                      @endforeach


                    </marquee>


                    <div class="container1">


                    <div class="list-group">
  <a href="/subjects" class="list-group-item list-group-item-action ">Subjects</a>
  <a href="/guides" class="list-group-item list-group-item-action">Guides</a>
  <a href="/schedulehome" class="list-group-item list-group-item-action">Schedule</a>
  <a href="/teamsadmin" class="list-group-item list-group-item-action">Student teams</a>
  <a href="/report" class="list-group-item list-group-item-action">Report</a>

</div>



                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
