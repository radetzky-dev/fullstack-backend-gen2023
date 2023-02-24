<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function phone($id)
    {
        echo (User::find($id)->phone);
    }
}
