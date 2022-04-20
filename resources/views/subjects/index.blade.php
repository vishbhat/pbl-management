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
    <th>Sem</th>
    <th>PBL Subject</th>
    <th colspan="2">Select</th>

  </tr>
  @foreach($subs as $sub)
  <tr>
    <td>{{$sub->sem}}</td>
    <td>{{$sub->name}}</td>
    <td><form action="/subjects/update" method='POST'>
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$sub->id}}">
      <input type="submit" value="Update">
    </form> </td>
    <td><form action="/subjects/delete" method='POST'>
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$sub->id}}">
      <input type="submit" value="Delete">
    </form> </td>
  </tr>
  @endforeach
</table>
                <div class="one">


                     <a href="/subjects/add" class="btn btn-secondary btn-lg btn-block">Add subject</a>

                </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
