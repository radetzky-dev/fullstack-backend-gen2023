<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        \Log::channel('daily')->info('Richiesta arrivata alla home');
        return view('home.index');
    }
}