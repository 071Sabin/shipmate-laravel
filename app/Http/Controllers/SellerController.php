<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SellerController extends Controller
{
    public function sellerLogin()
    {
        // echo "hello login";
        return view('seller.seller_login');
    }

    public function sellerSignup()
    {
        return view('seller.seller_signup');
    }

    public function sellerSignup_process(Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                "phone" => "required|digits:10",
                "email" => "required|email|unique:seller,email",
                "password" => "required|min:6|confirmed",
                "password_confirmation" => "required|same:password"
            ],
            [
                "phone.required" => "You forgot your contact No.",
                "phone.digits" => "This number won't receive OTP.",
                "email.unique" => "This E-mail is already in use."
            ]
        );

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');

        $request->session()->put('seller_data', [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => bcrypt($password)
            // 'otp' => $otp
        ]);

        $request->session()->flash('seller_register_process_done', true);
        return redirect()->route("site.seller.seller_signup");
    }

    public function otpSeller()
    {
        return view('seller.otp_seller_signup');
    }

    public function otpSeller_process(Request $request)
    {
        $request->validate(
            [
                "userotp" => "required"
            ],
            [
                "userotp.required" => "Enter valid OTP."
            ]
        );

        $user_otp = $request->input('userotp');
        $seller_data = $request->session()->get('seller_data');

        $otp = rand(100000, 999999);
        $message = "Your OTP code for Shit-Mate registration is: $otp";
        $to = $request->input('email');
        $subject = 'OTP Code for Registration';

        // Mail::send([], [], function ($message) use ($to, $subject, $message) {
        //     $message->to($to)->subject($subject)->setBody($message, 'text/plain');
        // });


        if ($user_otp == "123456") {

            $seller = new seller();
            $seller->name = $seller_data['name'];
            $seller->phone = $seller_data['phone'];
            $seller->email = $seller_data['email'];
            $seller->password = $seller_data['password'];
            $seller->save();

            $request->session()->flash('seller_otp_verified', true);
            return redirect()->route("site.seller.seller_login");
        } else {
            $request->session()->flash('wrong_seller_otp', true);
            return redirect()->route("site.seller.seller_signup");
        }
    }

    public function seller_home()
    {
        return view('seller.seller_home');
    }
}