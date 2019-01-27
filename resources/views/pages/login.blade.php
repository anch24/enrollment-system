@extends('layouts.app')

@section('content')

<div class="row" style="background-color: #1976D2;">
    <div class="col-md mx-auto mt-4 pt-2">
        <h1 class="font-weight-normal text-center text-light" style="background-color: #1976D2;">Login as Student/Staff/Faculty or Administrator</h1>
    </div>
</div>

<div class="row" style="background-color: #1976D2;">
        
    <div class="col-md-3 mx-auto card text-light mt-4 mb-4" style="background-color: #2196F3">
        <h5 class="text-center mt-4">LOGIN</h5>
        <div class="card-body text-center">
            <form>
                <div class="form-group">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter email/id-no">
                        <small id="usernameHelp" class="form-text text-muted text-light">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection