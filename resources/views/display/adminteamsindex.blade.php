@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">  <div class="back"><a href="/home" type="botton">Back</a></div></div>

                <div class="card-body">


                    <div class="container1">



                      <div class="list-group">
                          @foreach($subs as $sub)
    <a href="/subview/{{$sub}}" class="list-group-item list-group-item-action ">{{$sub}}</a>
      @endforeach





                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
