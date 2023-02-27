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
    public function updatedregisterList()
    {
        $registers = Registeruser::where('profile_setup', 1)->latest()->get();
        return view('admin.registerlist.updatedlist')->with('registers', $registers);
    }

    public function registerList()
    {
        $registers = Registeruser::where('profile_setup', 0)->latest()->get();
        return view('admin.registerlist.list')->with('registers', $registers);
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:155'
        ]);
        $otp = \rand(1000, 9999);
        $freehit = Freehit::first();
        $user = Registeruser::where('email', $request->email)->first();

        if ($user) {
            $user->otp = $otp;
            $user->save();
            $data = [
                'email' => $request->email,
                'otp' => $otp
            ];
            Mail::to($request->email)->send(new OTPmail($data));
            return response(["status" => 200, "message" => "Success", 'data' => $data]);
        }



        $data = [
            'email' => $request->email,
            'hit_remaining' => $freehit->freecount,
            'free_hit' => $freehit->freecount,
            'otp' => $otp
        ];

        $registeruser = Registeruser::create($data);
        Mail::to($request->email)->send(new OTPmail($data));

        return response(["status" => 200, "message" => "Success", 'data' => $data]);


    }



    public function registerVerify(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:155',
            'otp' => 'required|numeric',
        ]);
        $registeruser = Registeruser::where([['email', '=', $request->email], ['otp', '=', $request->otp]])->first();

        if ($registeruser) {
            $data = [
                'email' => $registeruser->email,
            ];
            return response(["status" => 200, "message" => "Success", 'data' => $data]);
        }
        return response(["status" => 403, "message" => "Invalid OTP",]);
    }


    public function resendOtp(Request $request)
    {
        $otp = \rand(1000, 9999);
        $user = Registeruser::where('email', $request->email)->first();
        $user->otp = $otp;
        $user->save();
        $data = [
            'email' => $request->email,
            'otp' => $otp
        ];

        Mail::to($request->email)->send(new OTPmail($data));
        return response(["status" => 200, "message" => "Success", 'data' => $data]);
    }


    public function userdetail($email)
    {

        $user = Registeruser::where('email', $email)->first();
        return response(["status" => 200, "message" => "Success", 'data' => $user]);
    }


    public function reducehit($email)
    {

        $user = Registeruser::where('email', $email)->first();
        $user->hit_remaining = $user->hit_remaining - 1;
        $user->save();

        return response(["status" => 200, "message" => "Success", 'data' => $user]);
    }


    public function updateRegisterUser(Request $request, $email)
    {

        $user = Registeruser::where('email', $email)->first();
        $request->validate([
            'name' => 'required|max:45',
            'address' => 'required|max:255',
            'number' => 'required|max:36',
        ]);
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
            'profile_setup' => 1
        ];
        $user->update($data);

        return response(["status" => 200, "message" => "Success", 'data' => $user]);
    }


    public function addUser()
    {
        return view('admin.registerlist.create');
    }

    public function userStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:45',
            'address' => 'required|max:255',
            'number' => 'required|max:36',
            'email' => 'required|email|unique:registerusers',
        ]);
        $freehit = Freehit::first();
        $otp = \rand(1000, 9999);
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
            'profile_setup' => 1,
            'email' => $request->email,
            'otp' => $otp,
            'free_hit' => $freehit->freecount,
            'hit_remaining'=>$freehit->freecount,
        ];

        Registeruser::create($data);

        return redirect()->route('updatedregisterlist')->with('success', 'User Created Successfully');


    }


    public function editUser($id)
    {      $user = Registeruser::find($id);
        return view('admin.registerlist.create')->with('user', $user);
    }
    
    
    
    
    public function userDelete($id)
    {      $user = Registeruser::find($id);
    $user->delete();
         return redirect()->route('updatedregisterlist')->with('success', 'User Deleted Successfully');
    }

    public function userUpdate(Request $request, $id){


        $request->validate([
            'name' => 'required|max:45',
            'address' => 'required|max:255',
            'number' => 'required|max:36',
            'email' => 'required|email',
        ]);
        $user = Registeruser::find($id);
        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
           
            'email' => $request->email,
            
        ];

        $user->update($data);
        return redirect()->route('updatedregisterlist')->with('success', 'User Updated Successfully');

    }



    public function destroy($id)
    {    $user = Registeruser::find($id);
        $user->delete();
        return redirect()->route('updatedregisterlist')->with('success', 'User deleted Successfully');

    }

    



}
