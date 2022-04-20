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
      <th>PBL Subject</th>
      <th>Faculty Incharge</th>
      <th >Select</th>
    </tr>
    @foreach($facs as $fac)
    <tr>
      <td>{{$fac->sem}}</td>
      <td>{{$fac->subject}}</td>
      <td>{{$fac->name}}</td>
      <!-- <td><form action="/guides/update" method='POST'>
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$fac->id}}">
        <input type="submit" value="Update">
      </form> </td> -->
      <td><form action="/guides/delete" method='POST'>
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$fac->id}}">
        <input type="submit" value="Delete">
      </form> </td>
    </tr>
    @endforeach
  </table>
  <div class="one">


       <a href="/guides/add" class="btn btn-secondary btn-lg btn-block">Add guide</a>

  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
