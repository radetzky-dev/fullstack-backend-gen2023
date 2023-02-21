<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BladeTesterController extends Controller
{
    public function index(Request $request)
    {
        $data = ['nome' => 'Mario', 'cognome' => 'Rossi'];
  
        return view('test.test', $data);
    }

    public function child(Request $request)
    {
        $data = ['nome' => 'Mario', 'cognome' => 'Rossi'];
        return view('test.child', $data);
    }
}
