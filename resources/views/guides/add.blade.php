@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/guides">back</a></div>

                <div class="card-body">
<form class="form-horizontal" action="/guides/store" method='POST'>
  {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" >Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name" placeholder="Enter name" required>
      </div>
    </div>

    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control"  name="email" placeholder="Enter email"required>
      </div>
    </div>



    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Subject:</label>
      <div class="col-sm-10">
        @foreach ($subs as $sub)
        <input type="radio" name="id" value="{{$sub->id}}" required> {{$sub->name }}<br>
        @endforeach
      </div>
    </div>

    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Section:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="section" placeholder="Enter section"required>
      </div>
    </div>



    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Guide created");
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
