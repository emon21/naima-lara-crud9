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
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Student Phone No</th>
                        <th>Student Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($student as $value)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $value->std_name }}</td>
                            <td>{{ $value->std_email }}</td>
                            <td>{{ $value->std_phone }}</td>
                            <td>{{ $value->std_address }}</td>
                            <td>
                                <a class="btn btn-outline-success" href="{{ route('student.edit',$value->id) }}">Edit</a>
                                <a class="btn btn-outline-danger" href="{{ route('student.delete',$value->id) }}">Delete</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">Footer</div>
          </div>

    </div>
</div>



</body>
</html>
