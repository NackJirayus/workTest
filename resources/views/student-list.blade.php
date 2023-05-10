<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;">Students List</h2><br><br>
                    <div style="margin-right:10%;float:right;">
                        <a href="{{url('add-student')}}" class="btn btn-primary">Add Student</a>
                    </div>
                    @if(Session::has('success'))
                    <script>
                    swal("success","{{session::get('success')}}",'success',{
                    button:true,
                    button:"OK",
                    dangerMode:true,
                    })
                    </script>
                @endif
                    <table class="table">
                        <thead><tr>
                            <th>No.</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Faculty</th>
                            <th>Major</th>
                            <th></th>
                        </tr></thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($data as $stu)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$stu->student_id}}</td>
                                <td>{{$stu->name}}</td>
                                <td>{{$stu->surname}}</td>
                                <td>{{$stu->faculty}}</td>
                                <td>{{$stu->major}}</td>
                                <td><a href="{{url('edit-student/'.$stu->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('delete-student/'.$stu->id)}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
            </div>
        </div>
    </div>
</body>
</html>