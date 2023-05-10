<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stdent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Student</h2>
                @if(Session::has('success'))
                    <script>
                    swal("success","{{session::get('success')}}",'success',{
                    button:true,
                    button:"OK",
                    })
                    </script>
                @endif
                <form method="get" action="{{url('save-student')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-lebel">Student ID</label>
                        <input type="text" class="form-control" name="student_id"
                        placeholder="Enter ID" value="{{old('student_id')}}">
                        @error('student_id')
                        <script>
                        swal("Error","{{$message}}",'warning',{
                            timer:3000,
                            dangerMode:true,
                        })
                        </script>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Name</label>
                        <input type="text" class="form-control" name="name"
                        placeholder="Enter Name" value="{{old('name')}}">
                        @error('name')
                        <script>
                        swal("Error","{{$message}}",'warning',{
                            timer:3000,
                            dangerMode:true,
                        })
                        </script>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Surname</label>
                        <input type="text" class="form-control" name="surname"
                        placeholder="Enter Surname" value="{{old('surname')}}">
                        @error('surname')
                        <script>
                        swal("Error","{{$message}}",'warning',{
                            timer:3000,
                            dangerMode:true,
                        })
                        </script>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Faculty</label>
                        <input type="text" class="form-control" name="faculty"
                        placeholder="Enter Faculty" value="{{old('faculty')}}">
                        @error('faculty')
                        <script>
                        swal("Error","{{$message}}",'warning',{
                            timer:3000,
                            dangerMode:true,
                        })
                        </script>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Major</label>
                        <input type="text" class="form-control" name="major"
                        placeholder="Enter major" value="{{old('major')}}">
                        @error('major')
                        <script>
                        swal("Error","{{$message}}",'warning',{
                            timer:3000,
                            dangerMode:true,
                        })
                        </script>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>