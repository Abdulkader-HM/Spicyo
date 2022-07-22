<?php

namespace App\Http\Controllers;

use App\Models\AddTo;
use App\Models\CallBack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function app()
    {

        $msgs = CallBack::latest()->paginate(4);
        return view('layouts.admin.app', compact('msgs'));
    }

    public function index()
    {
        $users= User::get();
        $tasks = AddTo::latest()->paginate(5);
        $messages = CallBack::latest()->paginate(5);
        return view('admin.dashboard', compact('tasks','messages','users'));

    }
    public function tables()
    {
        $users = User::paginate(6);
        return view('admin.tables', compact('users'));
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
}
