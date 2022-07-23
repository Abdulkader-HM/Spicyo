<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class OrderController extends Controller
{
    public function order($id)
    {
        Order::create([
            'user_id' => Auth::user()->id,
            'food_id' => $id
        ]);

        return 'done';
    }
}
