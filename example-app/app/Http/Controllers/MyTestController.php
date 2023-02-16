<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTestController extends Controller
{
    public function greeting()
    {
        $id = 56;
        $num = 34;
        $sum = $id+$num;
        return "Ti mando tanti saluti = ".$sum;
    }

    public function show($param1, $param2)
    {
        $personalData = [
            'name' => "Sig ".$param1,
            'surname' => "Mr ". $param2,
            'address' => "via roma 6"
        ];
        return view('show-personal', $personalData);
    }

}
