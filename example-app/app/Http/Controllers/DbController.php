<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\ItemNotFoundException as NoResult;

class DbController extends Controller
{
    public function show(string $param = ""): View
    {
        if ($param == "") {
            $companies = DB::select('select * from companies');

        } else {
            $companies = DB::select('select * from companies where name like ?', ["%" . $param . "%"]);
        }
        $data["companies"] = $companies;
        return view('companies.db', $data);
    }

    public function getSingle($id)
    {
        //utile per evitare errori
        if (DB::table('companies')->where('id', $id)->exists()) {
            $company = DB::table('companies')->find($id);
            foreach ($company as $key => $value) {
                echo $key . " : " . $value . "<br>";
            }
        } else {
            echo "Nessun risultato";
        }



        //TODO mostrare i risultati in view apposita
        die();
    }

    public function showQb()
    {
        //query builder
        try {

            $email = DB::table('companies')
            ->where('name', 'Musa spa')
            ->where('email', 'LIKE', "%m%")
            ->value('email');

            //FOR  DEBUG
           // DB::table('companiers')->where('name', '=', 'Musa spa')->dump();

            $comp = DB::table('companies')->select('name', 'email as user_email')->where('name', 'Musa spa')->get();
            $companies = DB::table('companies')->get()->sortBy('name');

            $email = DB::select('select email from companies where name = ?', ['Musa spa']);





        } catch (NoResult $e) {
            echo "Nessun risulato";
            die();
        }

        return view('companies.db', ['companies' => $companies]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $result = DB::insert('insert into companies (name,email,address) values (?, ?,?)', [$request->name, $request->email, $request->address]);

        if (!$result) {
            return redirect('/dbtest/show/')
                ->with('error', 'La compagnia NON è stata creata.');
        }

        return redirect('/dbtest/show/')
            ->with('success', 'La compagnia è stata creata con successo.');
    }


    /*  public function update($array)
    {
    }
    */
    public function delete(string $id)
    {

        $deleted = DB::delete('delete from companies where id = ?', [$id]);

        if (!$deleted) {
            return redirect('/dbtest/show/')
                ->with('error', 'La compagnia NON è stata CANCELLATA.');
        }

        return redirect('/dbtest/show/')
            ->with('success', 'La compagnia è stata CANCELLATA con successo.');
    }


}