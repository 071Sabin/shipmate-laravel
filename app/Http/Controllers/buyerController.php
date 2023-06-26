<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class buyerController extends Controller
{
    public function buyerLogin()
    {
        Auth::logout();
        return view('buyer.buyer_login');
    }

    
    public function buyerLogin_process(Request $request)
    {
        $request->validate(
            [
                "email" => "required|email",
                "password" => "required|min:6",
            ]
        );
        $errors = new MessageBag;
        $credentials = $request->only('email', 'password');


        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route("site.buyer.portal")->with('alert-success', 'You are now logged in.');
        }

        $errors = new MessageBag(['err' => ['Email and/or password invalid.']]);

        return Redirect::back()->withErrors($errors);
    }

    public function buyerSignup()
    {
        return view('buyer.buyer_signup');
    }

    public function buyerSignup_process(Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                "phone" => "required|digits:10",
                "email" => "required|email|unique:buyer,email",
                "password" => "required|min:6|confirmed",
                "password_confirmation" => "required|same:password"
            ],
            [
                "phone.required" => "You forgot your contact No.",
                "phone.digits" => "This number won't receive OTP.",
                "email.unique" => "This email is already registered.Try Again."
            ]
        );

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');

        $request->session()->put('buyer_data', [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => bcrypt($password)
            // 'otp' => $otp
        ]);

        $request->session()->flash('buyer_register_process_done', true);
        return redirect()->route('site.buyer.buyer_signup');
    }
    public function otpBuyer()
    {
        return view('buyer.otp_buyer_signup');
    }

    public function otpBuyer_process(Request $request)
    {
        $request->validate(
            [
                "userotp" => "required"
            ],
            [
                "userotp.required" => "Enter valid OTP."
            ]
        );

        $buyer_data = $request->session()->get('buyer_data');

        $otp = rand(100000, 999999);
        $message = "Your OTP code for Ship-Mate is: $otp\n";

        $user_otp = $request->input('userotp');

        //Mail::send([], [], function ($message) use ($to, $subject, $message) {
        //      $message->to($to)->subject($subject)->setBody($message, 'text/plain');
        // });

        if ($user_otp == "123456") {

            $buyer = new buyer();
            $buyer->name = $buyer_data['name'];
            $buyer->phone = $buyer_data['phone'];
            $buyer->email = $buyer_data['email'];
            $buyer->password = $buyer_data['password'];
            $buyer->save();

            $request->session()->flash('buyer_otp_verified', true);
            return redirect()->route("site.buyer.buyer_login");
        } else {
            $request->session()->flash('wrong_buyer_otp', true);
            return redirect()->route("site.buyer.buyer_signup");
        }
    }

    public function BuyerPortal(){
        return view('buyer.buyer_portal');
    }

}