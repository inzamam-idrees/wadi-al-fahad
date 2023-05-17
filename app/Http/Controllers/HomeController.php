<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $cities = DB::table('cities')->get();
        return view('home', compact('cities'));
    }
}
