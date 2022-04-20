@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/subjects">back</a></div>

                <div class="card-body"><form class="form-horizontal" action="/subjects/up" method='POST'>
  {{csrf_field()}}
    <div class="form-group"></br>
      <label class="control-label col-sm-2" >Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="name" value="{{$sub->name}}"required>
      </div>
    </div>
    <input type="hidden"   name="id" value="{{$sub->id}}">
    <div class="form-group">
      <label class="control-label col-sm-2" >Sem:</label>
      <div class="col-sm-10">
        <input type="radio" name="sem" value="1st/2nd" required> 1st/2nd<br>
        <input type="radio" name="sem" value="3rd/4th"> 3rd/4th<br>
        <input type="radio" name="sem" value="5th/6th" >5th/6th<br>
        <input type="radio" name="sem" value="7th/8th"> 7th/8th<br>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
      </div>
    </div>
    <script>
      function myFunction() {
      alert("Subject Updated");
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
