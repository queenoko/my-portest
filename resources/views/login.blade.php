@extends('layouts.master')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2 class="mb-4">Login</h2>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection