@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6 text-center bg-light my-4 p-2 rounded-pill shadow">
            <h3>Welcome To Dashboard</h3>
        </div>
    </div>
    <div class="row">
        <div class="card col-3 mb-4 mx-3 text-center py-1 shadow" style="width: 18rem;">
            <div class="justify-content-center">
                <img src="{{asset('Images/projectpic.png')}}" class="card-img-top img-fluid w-50 " alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Projects <span class="badge bg-danger">5</span></h5>
                <p class="card-text">Card Subtitle</p>
                <a href="../projects" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card col-3 mb-4 mx-3 text-center py-1 shadow" style="width: 18rem;">
            <div class="justify-content-center">
                <img src="{{asset('Images/userspic.png')}}" class="card-img-top img-fluid w-50 justify-content-center" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">Card Subtitle</p>
                <a href="../users" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card col-3 mb-4 mx-3 text-center py-1 shadow" style="width: 18rem;">
            <div class="justify-content-center">
                <img src="{{asset('Images/taskspic.png')}}" class="card-img-top img-fluid w-50 justify-content-center" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Tasks <span class="badge bg-danger">20</span></h5>
                <p class="card-text">Card Subtitle</p>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div>
        <div class="card col-3 mb-4 mx-3 text-center py-1 shadow" style="width: 18rem;">
            <div class="justify-content-center">
                <img src="{{asset('Images/client.png')}}" class="card-img-top img-fluid w-50 justify-content-center" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Client</h5>
                <p class="card-text">Card Subtitle</p>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection