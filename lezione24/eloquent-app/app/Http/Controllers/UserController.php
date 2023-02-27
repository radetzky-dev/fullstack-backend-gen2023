<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;

class UserController extends Controller
{
    public function phone($id)
    {
        //echo User::find($id)->phone;
        $number = User::find($id)->phone;
        return view('phone', compact('number'));
    }

    public function getUserFromIdPhone($idphone)
    {
        echo Phone::find($idphone)->user;
    }

}
