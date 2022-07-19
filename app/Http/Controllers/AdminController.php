<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function tables()
    {
        return view('admin.tables');
    }

    public function chart()
    {
        return view('admin.chart');
    }
}
