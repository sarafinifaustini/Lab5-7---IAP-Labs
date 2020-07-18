<!DOCTYPE html>
<html lang="en">

<head>
    <title>VIEW ALL CARS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            background-color:#BED2EF;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            background-color:#BED2EF;
            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
            opacity: 90%;
        }
    </style>
</head>

<nav class="navbar bg-primary">
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

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <br />
                <h3 style="text-align:center; color:black;">VIEW ALL CARS</h3>
                

                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}} </p>
                </div>
                @endif
                
                <div style="text-align:right; margin:5px; color:black;">
                    <button class="btn btn-primary"><a href="{{route('car.create')}}" style="color:black;">ADD NEW CAR</a></button>
                </div>
                <div align="right">

                    <table class="table table-bordered">
                        <thead style="background-color:#f54d3d ; color:black;">
                            <tr>
                                <th>Car Make</th>
                                <th>Car Model</th>
                                <th>Produced_On</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="myTable" style="color:black;">
                            @foreach($cars as $row)
                            <tr>
                                <td><b>{{$row['make']}}</b></td>
                                <td><b><i>{{$row['model']}}</i></b></td>
                                <td><b>{{$row['produced_on']}}</b></td>
                                <td><a href="{{action('CarsController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="post" class="delete_form" action="{{action('CarsController@destroy',$row['id'])}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <script>
            $(document).ready(function() {
                $('.delete_form').on('submit', function() {
                    if (confirm("Are You Sure You Want To Delete It?")) {
                        return true;
                    } else {
                        return false;
                    }
                });
            });

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>


</body>

</html>