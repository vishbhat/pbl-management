@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/home">back</a></div>

                <div class="card-body">
  <table class="table">
  <tr>
    <th>Date</th>
    <th>Task to be done</th>
    <th colspan="2" >Select</th>

  </tr>
  @foreach ($schs as $sch)
  <tr>
    <td>{{$sch->date}}</td>
    <td>{{$sch->task}}</td>
    <td><form action="/schedule/update" method='POST'>
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$sch->id}}">
      <input type="submit" value="Update">
    </form> </td>
    <td><form action="/schedule/delete" method='POST'>
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$sch->id}}">
      <input type="submit" value="Delete">
    </form> </td>
  </tr>
  @endforeach

</table>
                <div class="one">


                     <a href="/schedule" class="btn btn-secondary btn-lg btn-block">Make Schedule</a>

                </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
