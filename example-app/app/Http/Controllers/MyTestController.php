<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTestController extends Controller
{
    public function greeting()
    {
        $id = 56;
        $num = 34;
        $sum = $id + $num;
        return "Ti mando tanti saluti = " . $sum;
    }


    public function show($param1, $param2,$param3)
    {
        $personalData = [
            'name' => $param1,
            'surname' => $param2,
            'address' => $param3
        ];
        return view('anagrafica/update-anagrafica', $personalData);
    }

    public function showquery(Request $request)
    {
        var_dump($request->all());
    }

    public function update(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'surname' => $request['surname'],
            'address' => $request['address'],
        ];

        return view('anagrafica/show-anagrafica', $data);
    }

    public function updatewithput(Request $request)
    {
        $data = [
            'name' => $request['surname'],
            'surname' => $request['name'],
            'address' => $request['address'],
        ];

        return view('anagrafica/show-anagrafica', $data);
    }
}
