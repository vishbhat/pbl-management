@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="back"></div>
            <div class="card">

                <div class="card-header"><marquee behavior="scroll" direction="left">
                  Schedule:
                  @foreach($schs as $sch)
                ----->{{$sch->task}}({{$sch->date}})
                  @endforeach


                </marquee></div>

                <div class="card-body">

                  <div class="table-responsive">
  <table class="table">
  <tr>
    <th>Team number</th>
    <th>Topic</th>
    <th>View</th>
  </tr>
  @foreach($teams as $team)
  <tr>
    <td>{{$team->id}}</td>
    <td>{{$team->topic}}</td>
    <td><form action="/team/view" method='POST'>
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$team->id}}">
      <input type="submit" value="View">
    </form> </td>
  </tr>
  @endforeach
</table>
</div>

                    <div class="container1">

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
