<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function newsLetter(Request $request)
    {
        News::create([
            'email' => $request->email,
            // 'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('index');
    }
}
