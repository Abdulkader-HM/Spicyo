<?php

namespace App\Http\Controllers;

use App\Models\CallBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallBackController extends Controller
{
    public function saveMail(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        CallBack::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);
        return redirect()->route('index');
    }
}
