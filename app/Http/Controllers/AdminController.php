<?php

namespace App\Http\Controllers;

use App\Models\AddTo;
use App\Models\CallBack;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function app()
    {

        $msgs = CallBack::latest()->paginate(4);
        return view('layouts.admin.app', compact('msgs'));
    }

    public function index()
    {
        $users = User::get();
        $tasks = AddTo::latest()->paginate(5);
        $messages = CallBack::latest()->paginate(5);
        return view('admin.dashboard', compact('tasks', 'messages', 'users'));
    }
    public function tables()
    {
        $users = User::paginate(6);
        $orders = Order::where('status', 'ordered')->orWhere('status', 'confirm')->paginate(5);
        return view('admin.tables', compact('users', 'orders'));
    }

    public function confirmOrder($id)
    {
        $order = Order::find($id);
        $order->status = 'confirm';
        $order->save();
        return redirect()->back();
    }

    public function cancelOrder($id)
    {
        $order = Order::find($id);
        $order->status = 'canceled';
        $order->save();
        return redirect()->back();
    }

    public function chart()
    {
        return view('admin.chart');
    }

    public function addTask(Request $request)
    {
        AddTo::create([
            'user_id' => Auth::user()->id,
            'task' => $request->task
        ]);
        return redirect()->back();
    }

    public function createUserPage()
    {
        return view('admin.create_user');
    }

    public function createUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->type,
            'email_verified_at' => time(),

        ]);

        return redirect()->route('admin/tables');
    }

    public function deleteUser($id)
    {
        $delete = User::destroy($id);
        return redirect()->back();
    }

}
