<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        $profile = Profile::get()->first();
        $user = User::get()->first();
        return view('users.profile', compact('user', 'profile'));
    }

    public function edit($id)
    {
        $profile = Profile::get()->where('id', $id)->first();
        $profile = Profile::get()->first();
        // $user = User::get()->first();
        return view('users.edit', compact('profile'));
    }


    //edit profile
    public function store(Request $request, $id)
    {

        $newImageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/users'), $newImageName);
        Profile::where('user_id', $id)->update([
            'phone' => $request->phone,
            'address' => $request->address,
            'user_id' => $id,
            'image' => $newImageName
        ]);

        // }
        // $user = new User();
        // $profile = new Profile();
        // $profile->phone = $request->phone;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $profile->save();
        // $user->save();
        return redirect()->route('profile');
    }




    // public function test()
    // {
    //     // $profile = Profile::get()->where('id',$id);
    //     $user = User::get();
    //     return view('users.test', compact('user'));
    // }

    public function createProfile()
    {
        return view('users.createProfile');
    }

    public function saveProfile(Request $request, $id)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move('public_path'('images/users'), $imageName);
        Profile::create([
            'phone' => $request->phone,
            'address' => $request->address,
            'user_id' => $id,
            'image' => $imageName
        ]);
        return redirect()->route('profile');
    }
}
