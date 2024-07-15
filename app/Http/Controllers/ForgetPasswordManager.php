<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view('admin/forgetpassword');
    }
    function forgetPasswordPost(Request $request){
        $request -> validate([
            'email'=>'required|email',

        ]);
        $token=str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        Mail::send('emails/forgetpassword',['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->route('forgetpassword')->with('success','We have send an email to reset password.');
    }

    function resetPassword($token){
       return view('admin/newpassword',compact('token'));
    }

    function resetPasswordPost(Request $request){
       $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6',
        'password_confirmation'=>'required',

       ]);
       $updatepassword=DB::table('password_reset_tokens')
       ->where([
            'email' => $request->email,
            'token' => $request->token
       ])->first();

       if(!$updatepassword){
        return redirect()->route('resetpassword')->with('error','Invalid');
       }

       Admin::where('admin_email',$request->email)->update(['admin_pass'=>Hash::make($request->password)]);

       DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
       
       return redirect()->route('adminlogin')->with('success','Password reset success.');
    }

}
