<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search = $_GET['search'];
        $foods = Food::where('name', 'LIKE', '%' . $search . '%')->get();

        return view('food.search', compact('foods'));
    }
}
