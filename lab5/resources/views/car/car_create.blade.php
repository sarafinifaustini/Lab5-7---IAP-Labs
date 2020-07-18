<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADD CAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
          
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;

            background-color: #BED2EF;
            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
            opacity: 90%;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-light bg-primary"">
  <div class=" container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/" style="color:black;">HOME</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('car.create')}}" style="color:black;"><b>Add Car</b></a></li>
            <li><a href="{{route('car.index')}}" style="color:black;"><b>View All Cars</b></a></li>
            <li><a href="{{route('review.create')}}" style="color:black;"><b>Add Review</b></a></li>
            <li><a href="{{route('review.index')}}" style="color:black;"><b>View All Reviews</b></a></li>

        </ul>
        <form class="navbar-form navbar-left">
            <input class="form-control" id="myInput" type="text" placeholder="Search.."><i class="glyphicon glyphicon-search"></i>

        </form>
        </div>
    </nav>
    
    <div class="container">

        <h3 style="text-align:center; color:black;">CAR DETAILS</h3>
        <form method="post" action="{{url('car')}}" enctype="multipart/form-data" style="margin:auto;    padding-top:20px; padding-left:20%; ">
            {{ csrf_field() }}

            @include('inc.messages')

            <div class="form-group">
                <label for="make">Car type:</label>
                <input style="width:100%;"  type="text" class="form-control" name="make" id="make" >
            </div>

            <div class="form-group">
                <label for="model">Car Model:</label>
                <input style="width:100%;"  type="text" class="form-control" name="model" id="model" >
            </div>


            <div class="form-group">
                <label for="price">Year of Production:</label>
                <input  style="width:100%;" type="date" class="form-control" name="produced_on" id="produced_on" >
            </div>

            <br><br>

            <button type="submit" class="btn btn-primary">ADD</button>
        </form>

    </div>

    </div>
    </div>

</body>

</html>