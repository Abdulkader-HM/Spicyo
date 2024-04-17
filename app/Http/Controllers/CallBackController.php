<?php

namespace App\Http\Controllers;

use App\Models\CallBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallBackController extends Controller
{
    public function saveMail(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'type' => 'required',
        // ]);
        CallBack::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);
        return redirect()->route('index');
    }
}
