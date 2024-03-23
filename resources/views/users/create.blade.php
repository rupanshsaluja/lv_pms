@extends('layouts.app')
@section('content')
<div class="container h-75">
    <div class="text-center d-flex justify-content-center mt-5 row">
        <div class="col-8">
            <h1 class="text-light border-dark bg-info py-2 rounded-pill my-4">ADD USER</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-5 bg-secondary p-4 mb-4">

            <form action="adduser.php" method="POST">
                @csrf 
                <div class="row">
                    <!-- Name Input -->
                    <div class="col-12 form-floating mb-3 ">
                        <input type="text" class="form-control" id="floatingInput" placeholder="fullname" name="fname" required>
                        <label for="floatingInput">Enter Full Name</label>
                    </div>
                    <!-- Email input -->
                    <div class="mb-3 col-12">
                        <label for="exampleFormControlInput1" class="form-label text-light">Email
                            address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
                    </div>
                    <!-- Password -->
                    <div class="mb-3 col-12">
                        <label for="exampleFormControlInput1" class="form-label text-light">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="passwordr" required>
                    </div>

                    <!-- 3 radio btns  -->
                    <label class="text-light col-4" for="radiobtns">Gender :</label>

                    <div class="form-check  text-light col-4 mb-3 ">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check  text-light col-4 mb-3">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">female</label>
                    </div>

                    <!-- input select -->
                    <div class=" mb-3 col-12 text-center ">
                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="user_type">
                            <option selected disabled>User type</option>
                            <!-- to set value as user_type =  echo $row['user_type']; , for id = echo $row['id];  -->
                            <option value="1">
                                Admin </option>
                            <!-- to set value as user_type =  echo $row['user_type']; , for id = echo $row['id];  -->
                            <option value="2">
                                Manager </option>
                            <!-- to set value as user_type =  echo $row['user_type']; , for id = echo $row['id];  -->
                            <option value="3">
                                Employee </option>
                            <!-- to set value as user_type =  echo $row['user_type']; , for id = echo $row['id];  -->
                            <option value="4">
                                Client </option>
                        </select>
                    </div>
                    <!-- Button (Add user) -->
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" value="Add User">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
