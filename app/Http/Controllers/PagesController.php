<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('food.index');
    }
    public function about()
    {
        return view('food.about');
    }
    public function blog()
    {
        $foods = Food::get();
        return view('food.blog', compact('foods'));
    }

    public function recipe()
    {
        return view('food.recipe');
    }
    public function contact()
    {
        return view('food.contact');
    }

    public function control()
    {
        $foods = Food::paginate(4);
        return view('food.control', compact('foods'));
    }

    public function store(Request $request)
    {
        $newImageName = time() . "-" . $request->name . "." . $request->image->extension();
        $request->image->move(public_path('images/food'), $newImageName);
        // dd($request->all());
        $food = Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $newImageName
        ]);
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Food::destroy($id);
        return redirect()->route('control');
    }

    public function createMeal()
    {
        return view('food.user');
    }
}
