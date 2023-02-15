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
}
