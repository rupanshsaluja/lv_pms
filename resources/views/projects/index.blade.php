@extends('layouts.app')
@section('content')
<div class="container">
  <div class="text-center d-flex justify-content-center mt-5 row">
    <div class="col-8">
      <h1 class="text-light border-dark bg-success py-2 rounded-pill my-4 shadow">PROJECT MANAGEMENT SYSTEM</h1>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="mb-3 mt-2">
      <a href="projects/create"> <button type="button" class="btn btn-primary shadow">Add Project</button> </a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-hover shadow">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Details</th>
          <th>Status</th>
          <th>Due Date</th>
          <th>Created At</th>
          <th class="text-center">Actions</th>
        </tr>
        @foreach($amit as $projects)
        <tr>
          <td>{{ $projects->id }}</td>
          <td>{{ $projects->fullname }}</td>
          <td>{{ $projects->projectdetails }}</td>
          <td>{{ $projects->statusr }}</td>
          <td>{{ $projects->dater }}</td>
          <td>{{ $projects->created_at }}</td>
          <td class="text-center">
            <!-- edit btn -->
            <a href="projects/edit"> <button type="button" class="btn btn-info">Edit</button> </a>
            <!-- view btn -->
            <a href="projects/vieww"> <button type="button" class="btn btn-success">View</button> </a>
            <!-- delete btn  -->
            <a href="#"> <button type="button" class="btn btn-danger">Delete</button> </a>
          </td>
        </tr>
        @endforeach
      </table>
      <!-- pagination start-->
      <nav aria-label="Page navigation">
        <ul class="pagination    ">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- pagination ends  -->
    </div>
  </div>
</div>
@endsection