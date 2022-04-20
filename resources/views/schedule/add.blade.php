@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/schedulehome">back</a></div>

                <div class="card-body">
<form class="form-horizontal" action="/schedule/store" method='POST'>
  {{csrf_field()}}
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control"  name="date" required>
      </div>
    </div>
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Task:</label>
      <div class="col-sm-10">
      <textarea name="task" placeholder="Enter task " rows="5" cols="42"required></textarea>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>

  </form>
</div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection
