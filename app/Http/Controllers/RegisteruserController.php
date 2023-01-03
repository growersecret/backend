<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteruserController extends Controller
{
    public function registerList(){
        return view('admin.registerlist.list');
    }
}
