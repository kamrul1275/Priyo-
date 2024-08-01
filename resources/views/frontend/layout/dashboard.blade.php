<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

  


<div class="container">

<div class="row">

<div class="col-md-4"> Total Members
   {{$total_gender}}</div>
<div class="col-md-4">Men online
    {{$male_count}}
</div>

<div class="col-md-4">Women online
{{$female_count}}
</div>

</div>
</div>
<br>
<br>
<div class="container">

<div class="row">

<div class="col-md-12">  
  
<a href="{{route("logout")}}" class="btn btn-danger">logout</a>
</div>





</div>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>