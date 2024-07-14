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

  <form method="GET" action="{{ route('members.search') }}">
    <div class="form-group">
        <label for="gender">Search for</label>
        <select name="gender" id="gender" class="form-control" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>



  </div>
  </div>


<div class="container">

<div class="row">


active member name: 

@foreach ($active_members as $iteam)
    Name: {{ $iteam['email'] }}
@endforeach

</div>

</div>
</div>

<hr>


<div class="container">

<div class="row">


Latest member name: 

 @foreach ($latest_members as $iteam)
    Name: {{ $iteam['email'] }} Registered on 
    
    @if($iteam->created_at)
                - Registered on {{ $iteam->created_at->format('d-m-Y') }}
            @endif </li>
@endforeach 

</div>

</div>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>