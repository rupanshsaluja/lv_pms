@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav me-auto">

                            <a class="nav-link active " aria-current="page" href='http://localhost/PMS/'>Dashboard</a>
                            <a class="nav-link active " aria-current="page" href="http://localhost/PMS/projects">Projects</a>
                            <a class="nav-link active " aria-current="page" href="http://localhost/PMS/Users">Users</a>

                        </div>

                        <div class="navbar-nav">
                            <a href="http://localhost/PMS/logout.php" class="p-0"><button type="button" class="btn btn-outline-danger">Logout</button></a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<section style="background-color: #d3cce3;">
    <div class="container h-75">
        <div class="text-center d-flex justify-content-center mt-5 row">
            <div class="col-8">
                <h1 class="text-light border-dark bg-info py-2 rounded-pill my-4">EDIT USER</h1>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-5 bg-secondary p-4 mb-4">

                <form action="" method="POST">
                    <div class="row">
                        <!-- Name Input -->
                        <div class="col-12 form-floating mb-3 ">
                            <input type="text" class="form-control" id="floatingInput" placeholder="fullname" name="fname" value="Hedy Barnes" required>
                            <label for="floatingInput">Enter Full Name</label>
                        </div>
                        <!-- Email input -->
                        <div class="mb-3 col-12">
                            <label for="exampleFormControlInput1" class="form-label text-light">Email
                                address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="gokov@mailinator.com" required>
                        </div>
                        <!-- 3 radio btns  -->
                        <label class="text-light col-4" for="radiobtns">Gender :</label>
                        <div class="form-check  text-light col-4 mb-3 ">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check  text-light col-4 mb-3">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" checked>
                            <label class="form-check-label" for="inlineRadio2">female</label>
                        </div>

                        <!-- input select -->
                        <div class=" mb-3 col-12 text-center ">
                            <select class="form-select" name="user_type" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option>Select...</option>
                                <option value="1" selected>
                                    Admin </option>
                                <option value="2">
                                    Manager </option>
                                <option value="3">
                                    Employee </option>
                                <option value="4">
                                    Client </option>
                            </select>
                        </div>
                        <!-- Button (Add user) -->
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" value="UPDATE">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection