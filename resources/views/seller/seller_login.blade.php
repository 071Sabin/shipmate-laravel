@extends('seller.seller_master')

    @section('content')
        <div class="form-div right-side">

            <div>
                @if( ! empty( session('seller_otp_verified')))
                    <div class="alert alert-success">You are now registered as Seller. Please Login.</div>
                @endif
            </div>



            <h1 class="login text-4xl">Login <i class="bi bi-person-circle"></i></h1>
                @if ($error = $errors->first('err'))
                    <div class="alert alert-danger">{{ $error }}</div>
                @endif

            <form action="{{ route('site.seller.seller_login') }}" class="effect2" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address/Phone</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email/Phone">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <a href="" class="text-blue-500">Forgot Password?</a><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <p class="noAcc">Don't have an account?&nbsp;&nbsp;<a href="{{ route('site.seller.seller_signup') }}"><strong>  Signup <i class="bi bi-pencil-square"></i></strong></a></p>
            </form>
        </div>
    @endsection
