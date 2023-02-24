<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function show(): View
    {
        return view('articles', 
        ['articles' => DB::table('articles')->select('title', 'description')->paginate(15)]);
    }
}