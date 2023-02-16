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

    public function show($param1, $param2)
    {
        $personalData = [
            'name' => "Sig " . $param1,
            'surname' => "Mr " . $param2,
            'address' => "via roma 6"
        ];
        return view('show-personal', $personalData);
    }

    public function showquery(Request $request)
    {
        var_dump($request->all());
    }

    public function update(Request $request)
    {
        $all = $request->all();
        //TODO update nel model
        //array(4) { ["_token"]=> string(40) "QErmVJL3xlUylHBycFHOqLacvQHJvnCywhhS0xeN" ["name"]=> string(9) "Sig paolo" ["surname"]=> string(8) "Mr verdi" ["address"]=> string(10) "via roma 6" }
        $data = [
            'name' => $request['name'],
            'surname' => $request['surname'],
            'address' => $request['address'],
        ];

        return view('anagrafica/show-anagrafica', $data);
    }
}
