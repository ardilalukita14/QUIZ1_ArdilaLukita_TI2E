<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        return view('index', ['dataIndex' => $home]);
    }
}
    