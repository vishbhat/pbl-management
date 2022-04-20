@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="/home">back</a></div>

                <div class="card-body">
                    <?php

         echo Form::open(array('url' => '/uploadfile1','files'=>'true'));
         echo 'Select the file to upload(pdf only).</br>';
           echo "</br>"; ?>
            <input type="file" name="image" value="fileupload" id="image" required>
      </br>   <?php
           echo "</br>";
         echo Form::submit('Upload File');
         echo Form::close();
           echo "</br>";

      ?>
      <script>

    var x = document.getElementById("myFile").required;
    document.getElementById("demo").innerHTML = x;

    </script>
                  </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection
