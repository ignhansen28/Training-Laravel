<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-6">
            <br>
            <h1>Student Table</h1>
            <br>
        </div>
        <div class="col-6">
        <br>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" >
            Add Student
        </button>
        </div>
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Hobby</th>
                    <th>Age</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($student_data as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->hobby}}</td>
                    <td>{{$student->age}}</td>
                    <td><a href="/edit/{{$student->id}}/student" class="btn btn-primary btn-sm .text-nowrap" >Edit</a></td>
                    <td><a href="/delete/{{$student->id}}/student" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>   
    </div>
</body>
<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            <form action="/create/student" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hobby</label>
                    <input name="hobby" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input name="age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
        </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>