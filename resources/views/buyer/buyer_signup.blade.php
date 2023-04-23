@extends('buyer.buyer_master')

@section('content')

    <link rel="stylesheet" href="{{ asset('client_css/UserLogincss/userLogin.css') }}">

    <div class="form-div right-side">

        @if($errors->any())
            <div class="alert alert-danger">
                {{-- <span>Please fill all the details.</span> --}}
                @foreach($errors->all() as $e)
                    {{ $e }} <Br>
                @endforeach
            </div>
        @endif

        
        @if( !empty(!session('buyer_register_process_done')) and !empty(!session('wrong_buyer_otp')))
            <h1 class="text-4xl">Signup <i class="bi bi-pencil-square"></i></h1>
        
            <form action="{{ route('site.buyer.buyer_signup') }}" id="registration-form" method="POST" enctype="multipart/form-data">
    
                @csrf
    
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter name">
                    {{-- <div class="form-text text-danger">{{ $errors->first('name') }}</div> --}}
                </div>
    
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">
                    {{-- <div class="form-text text-danger">{{ $errors->first('email') }}</div> --}}
                </div>
    
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone">
                    {{-- <div class="form-text text-danger">{{ $errors->first('phone') }}</div> --}}
                </div>
    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    {{-- <div class="form-text text-danger">{{ $errors->first('password') }}</div> --}}
                </div>
    
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                    <div class="form-text text-danger">{{ $errors->first('password_confirmation') }}</div>
                </div>
    
                <button type="submit" class="btn btn-primary" id="signup-btn">SignUp</button>
            </form>
        @endif

        @if( !empty(session('buyer_register_process_done')) or !empty(session('wrong_buyer_otp')))
            @if (!empty(!session('wrong_buyer_otp')))
                <div class="alert alert-primary">check your email or message for OTP.</div>
            @endif
            @if( !empty(session('wrong_buyer_otp')))
                <div class="alert alert-danger">Enter valid OTP.</div>
            @endif
            <form action="{{ route('site.buyer.buyer_otp') }}" method="POST" class="effect2">
                @csrf
                <div class="form-group">
                    <label>OTP</label>
                    <input type="text" class="form-control" name="userotp" placeholder="Enter OTP">
                </div>
                <a href="#">resend</a><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif

    </div>
@endsection