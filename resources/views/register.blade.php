@extends('base')

@section('content')
<style>
    body{
    background: url(register.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }
</style>
<div class = "container">
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="mt-5">
            <div class="header bg-danger bg-danger  text-white">
                <h3 class="title">User Registration</h3>
            </div>
            <div class="body">
                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3 text-white">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3 text-white">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3 text-white">
                        <label for="mobilenumber">Phone Number</label>
                        <input type="mobilenumber" name="mobilenumber" id="mobilenumber" class="form-control">
                    </div>
                    <div class="mb-3 text-white">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-success bg-dark" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop