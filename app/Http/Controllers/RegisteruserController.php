<?php

namespace App\Http\Controllers;

use App\Mail\OTPmail;
use App\Models\Freehit;
use App\Models\Registeruser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;

class RegisteruserController extends Controller
{
    public function updatedregisterList(){
        $registers = Registeruser::where('profile_setup', 1)->latest()->get();
        return view('admin.registerlist.updatedlist')->with('registers', $registers);
    }

    public function registerList(){
        $registers = Registeruser::where('profile_setup', 0)->latest()->get();
        return view('admin.registerlist.list')->with('registers', $registers);
    }

    public function registerStore(Request $request){


        $request->validate([
            'email' => 'required|email|max:155'
        ]);
        $otp = \rand(1000, 9999);
       $freehit = Freehit::first();
        $user = Registeruser::where('email', $request->email)->first();

        if($user){

            $user->otp = $otp;
            $user->save();
            $data = [
                'email' => $request->email,
                 'otp' => $otp
            ];  

            Mail::to($request->email)->send(new OTPmail($data));
            return response(["status" => 200, "message" => "Success", 'data' =>$data]);
        }



        $data = [
            'email' => $request->email,
            'hit_remaining' => $freehit->freecount,
            'otp' => $otp
        ];

       $registeruser = Registeruser::create($data);
       Mail::to($request->email)->send(new OTPmail($data));
       
       return response(["status" => 200, "message" => "Success", 'data' =>$data]);
       
   
    }



    public function registerVerify(Request $request){
        $registeruser = Registeruser::where([['email','=',$request->email],['otp','=',$request->otp]])->first();

        if ($registeruser) {
            $data = [
                'email' => $registeruser->email,  
            ];
            return response(["status" => 200, "message" => "Success", 'data'=>$data]);
        }

        return response(["status" => 403, "message" => "Invalid OTP",]);
    }


    public function resendOtp(Request $request){
        $otp = \rand(1000, 9999);
        $user = Registeruser::where('email', $request->email)->first();
        $user->otp = $otp;
        $user->save();
        $data = [
            'email' => $request->email,
             'otp' => $otp
        ];  

        Mail::to($request->email)->send(new OTPmail($data));
        return response(["status" => 200, "message" => "Success", 'data' =>$data]);
    }


    public function userdetail($email){
     
        $user = Registeruser::where('email', $email)->first();
        return response(["status" => 200, "message" => "Success", 'data' =>$user]);
    }


    public function reducehit($email){
     
        $user = Registeruser::where('email', $email)->first();
        $user->hit_remaining = $user->hit_remaining -1 ;
        $user->save();

        return response(["status" => 200, "message" => "Success", 'data' => $user]);
    }
}
