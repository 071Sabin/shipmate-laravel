<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use Illuminate\Http\Request;

class buyerController extends Controller
{
    public function buyerLogin()
    {
        return view('buyer.buyer_login');
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

        $seller_data = $request->session()->get('buyer_data');

        $otp = rand(100000, 999999);
        $message = "Your OTP code for Ship-Mate is: $otp\n";

        $user_otp = $request->input('userotp');

        //Mail::send([], [], function ($message) use ($to, $subject, $message) {
        //      $message->to($to)->subject($subject)->setBody($message, 'text/plain');
        // });

        if ($user_otp == "123456") {

            $buyer = new buyer();
            $buyer->name = $seller_data['name'];
            $buyer->phone = $seller_data['phone'];
            $buyer->email = $seller_data['email'];
            $buyer->password = $seller_data['password'];
            $buyer->save();

            $request->session()->flash('buyer_otp_verified', true);
            return redirect()->route("site.buyer.buyer_login");
        } else {
            $request->session()->flash('wrong_buyer_otp', true);
            return redirect()->route("site.buyer.buyer_signup");
        }
    }
}