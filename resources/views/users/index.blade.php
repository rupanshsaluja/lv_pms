@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center  d-flex justify-content-center mt-5 row">
        <div class="col-8">
            <h1 class="text-light border-dark bg-success py-2 rounded-pill my-4 shadow">USERS LIST</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3 mt-2">
                <button type="button" class="btn btn-primary shadow">
                    <a class="text-decoration-none text-light" href="users/create">Add User</a>
                </button>
            </div>

            <table class="table table-striped shadow">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">User_Type</th>
                        <th class="text-center" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>
                            150 </td>
                        <td>
                            Hedy Barnes </td>
                        <td>
                            gokov@mailinator.com </td>
                        <td>
                            Female </td>
                        <td>
                            Admin </td>
                        <td class="text-center">
                            <!-- edit btn -->
                            <a href="users/edit"> <button type="button" class="btn btn-info ">Edit</button>
                            </a>
                            <!-- view btn -->
                            <a href="#"> <button type="button" class="btn btn-success">View</button> </a>
                            <!-- delete btn  -->
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>

    @endsection