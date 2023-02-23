<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{
    public function show()
    {
        //select

        $data["companies"] =[];
        return view('companies.db', $data);
    }
}
