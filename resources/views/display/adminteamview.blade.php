@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/subview/{{$new->subject}}">back</a></div>

                <div class="card-body">


<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-body">


                      <div class="panel-group">
                        <div class="panel panel-info">
                          <div class="panel-heading"><b>Topic:     </b>{{$new->topic}}</div><br>
                          <div class="panel-body"><b>  Student 1    :    </b>{{$new->name1}}<br><br>
                            <b>  USN 1    :    </b>{{$new->usn1}}<br><br>
                            <b>  Student 2    :    </b>{{$new->name2}}<br><br>
                              <b>  USN 2    :    </b>{{$new->usn2}}<br><br>
                       <b>  Synopsis   :    </b><a href="/synopsisview/{{$new->id}}">view</a><br><br>
                       <b>  Report   :    </b><a href="/reportview/{{$new->id}}">view
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</body>
@endsection
