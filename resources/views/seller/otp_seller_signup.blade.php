@extends('seller.seller_master')

@section('content')      
    @if($errors->any())
        <div class="alert alert-danger">
            <span>Enter valid OTP.</span>
            {{-- @foreach($errors->all() as $e)
                {{ $e }} <Br>
            @endforeach --}}
        </div>
    @endif
    <div class="form-div right-side">
        {{-- <div>
            @if( !empty(session('seller_register_process_done')))
                <div class="alert alert-primary">check your email or message for OTP.</div>
                <form action="{{ route('site.seller.seller_otp') }}" method="POST" class="effect2">
                    @csrf
                    <div class="form-group">
                        <label>OTP</label>
                        <input type="text" class="form-control" name="userotp" placeholder="Enter OTP">
                    </div>
         
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @endif
        </div> --}}

        <div class="alert alert-danger" style="padding: 100px;">404 ERROR</div>


    </div>
@endsection