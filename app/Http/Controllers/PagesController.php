<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\food_user;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $foods = Food::where('user_id', Auth::user()->id)->paginate(4);
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
            'user_id' => Auth::user()->id,
            'image' => $newImageName
        ]);
        return redirect()->route('blog');
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

    public function editMeal($id)
    {
        $meal = Food::find($id);
        return view('food.edit', compact('meal'));
    }

    public function updateMeal(Request $request, $id)
    {
        $newImageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/food'), $newImageName);
        Food::find($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'user_id' => Auth::user()->id,
            'image' => $newImageName,
            'description' => $request->description
        ]);
        return redirect()->route('control');
    }

    // public function orderPage()
    // {
    //     // $users = User::with(['foods' => function ($q) {
    //     //     $q->select('name', 'price');
    //     // }])->where('id', Auth::user()->id)->get();

    //     $users = User::with('foods')->where('id', Auth::user()->id)->get();
    //     return $users;

    //     // return view('users.orders', compact('users'));
    // }
}
