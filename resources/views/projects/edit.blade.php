@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center d-flex justify-content-center mt-5 row">
        <div class="col-8">
            <h1 class="text-light border-dark bg-info py-2 rounded-pill my-4">EDIT PROJECT</h1>
        </div>
    </div>
    <div class="row justify-content-center d-flex">
        <div class="col-5 bg-secondary p-4 mb-4">

            <!-- // Bootstrap alert -->
            <!-- form -->
            <form method="POST">
                <div class="row">
                    <!-- full name input text -->
                    <div class="form-floating mb-3 col-12">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Full Name:" name="fullname" required value="Upton Goodwin">
                        <label for="floatingInput">Enter Full Name</label>
                    </div>

                    <!-- text area -->
                    <div class="form-floating mb-3 col-12">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="projectdetails">Distinctio Officia </textarea>
                        <label for="floatingTextarea2">Project Details</label>
                    </div>

                    <!-- date input -->
                    <div class=" mb-3 col-6">
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <input placeholder="Due Date" type="date" id="example" class="form-control" name="dater" required value="1994-11-08">
                            <i class="fas fa-calendar input-prefix"></i>
                        </div>
                    </div>
                    <!-- input select -->
                    <div class=" mb-3 col-6 ">
                        <select class="form-select " id="inputGroupSelect04" aria-label="Example select with button addon" name="status">
                            <option>Select Status...</option>
                            <option value="1">On-hold</option>
                            <option value="2" selected>On-going</option>
                            <option value="3">Overdue</option>
                            <option value="4">Completed</option>
                        </select>
                    </div>
                    <!-- Description (text area) -->
                    <div class="form-floating mb-3 col-12">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description">Magni molestiae atqu</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="justify-content-center d-flex col">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection