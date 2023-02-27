<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function phone($id)
    {
        //echo User::find($id)->phone;
        $number = User::find($id)->phone;
        return view('phone', compact('number'));
    }

    public function search(Request $request)
    {

        $user = User::find($request->input('user_id'));
        if ($user === null) {
            return back()->withError("errore user id non trovato!")->withInput();
        }

        $testArray = ['mario','lucia','agnes'];

        session()->push('amici', $testArray);

        session(['username' => 'NOME:'.$user->name]);

        return view('search', compact('user'));
    }

    public function getUserFromIdPhone($idphone)
    {
        echo Phone::find($idphone)->user;
    }

}
