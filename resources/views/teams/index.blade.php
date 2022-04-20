@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/home">back</a></div>

                <div class="card-body">
<form class="form-horizontal" action="/teams/add" method='POST'>
  {{csrf_field()}}



    <div class="form-group">
      <label class="control-label col-sm-2" >Name1:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name1" placeholder="Enter name" required>
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >USN1:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="usn1" placeholder="Enter usn"required>
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Name2:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name2" placeholder="Enter name"required>
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >USN2:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="usn2" placeholder="Enter usn"required>
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Subject:</label>
      <div class="col-sm-10">
        @foreach ($subs as $sub)
        <input type="radio" name="subject" value="{{$sub}}" required> {{$sub }}<br>
        @endforeach
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Section:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="section" placeholder="Enter section"required>
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Topic:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="topic" placeholder="Enter topic name"required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Done!");
      }
  </script>
  </form>
</div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection
