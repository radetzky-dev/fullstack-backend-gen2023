<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function show($param)
    {

        //select
        //  $companies = DB::select('select * from companies where id > ?', [$param]);

        //name binding
        //  $companies = DB::select('select * from companies where name = :name', ['name' => "prova"]);

        DB::insert('insert into companies (name,email,address) values (?, ?,?)', ["prova nuova", 'ciccio@test.com', 'via del tramonto 7']);

        $companies = DB::select('select * from companies where name like ? and id > ?', ["%prova%", $param]);

       // $companies = DB::select('select * from companies');

        $data["companies"] = $companies;

        // $data["companies"] =[];
        return view('companies.db', $data);
    }
}