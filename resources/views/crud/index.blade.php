<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>

<div class="d-flex justify-content-between gap-2">
    <div class="col-sm-2">
        <div class="list-group">
            <a href="{{url('student')}}" class="list-group-item list-group-item-action">Home</a>
            <a href="{{url('student-list')}}" class="list-group-item list-group-item-action">Student List</a>
            <a href="#" class="list-group-item list-group-item-action">Third item</a>
          </div>
    </div>
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header">Student Add</div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="col-sm-4 mx-auto">
                    <form action="{{url('student_process')}}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label for="std_name" class="form-label">Student Name:</label>
                            <input type="text" class="form-control" id="std_name" placeholder="Enter std_name" name="std_name">
                        </div>

                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="std_phone">Phone No:</label>
                            <input type="text" class="form-control" id="std_phone" placeholder="Enter std_phone" name="std_phone">
                        </div>

                        <div class="mb-3">
                            <label for="comment">Student Address:</label>
                            <textarea class="form-control" rows="5" id="comment" name="std_address"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Student</button>

                      </form>
                </div>
            </div>
            <div class="card-footer">Footer</div>
          </div>

    </div>
</div>



</body>
</html>
