<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\food_user;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class OrderController extends Controller
{
    // public $qty;
    // public $price;
    // public $tax;

    public function orderPage($id)
    {
        $user = User::where('id', Auth::user()->id)->get();
        $meal = Food::find($id);
        return view('food.order', compact('user', 'meal'));
    }

    public function order(Request $request, $id)
    {
        $meal = Food::find($id);
        $qty = $request->qty;
        $price = $meal->price * $qty;
        $tax = $price / 100;
        Order::create([
            'user_name' => $request->user_name,
            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'meal_name' => $meal->name,
            'meal_price' => $meal->price,
            'total' => $price + $tax,
            'qty' => $qty,
            'tax' => $tax,

        ]);

        return redirect()->route('blog')->with('success', 'your order has been added successfully to database');
    }

    public function myOrders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(5);
        return view('users.orders', compact('orders'));
    }

    // public function basket($id){
    //     food_user::create([
    //         'user_id' => Auth::user()->id,
    //         'food_id' => $id,
    //         'status' => 'basket'
    //     ]);
    //     return 'done meal added to the basket';
    // }


}
