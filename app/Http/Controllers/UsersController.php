<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UsersController extends Controller
{

    public function showprofile($username)
    {
        $user = User::where('username', $username)->first();
        /*dd ($user);*/

        return view('users.profile', compact('user'));
    }

    public function update(Request $request, $username)
    {
        $user = User::where('username', $username)->first();

        $request->validate([
            'username' => 'alpha_dash|min:3|max:15|unique:users,username,' . $user->id,
            'fullname' => 'max:30',
            'avatar' => 'image|mimes:jpeg,jpg,png',
            'screenshoot' => 'image|mimes:jpeg,jpg,png'
        ]);

        $imageName = $user->avatar;
        $screenshootName = $user->screenshoot;

        if ($request->avatar) {
            $avatar_img = $request->avatar;
            $imageName = $user->username . '-' . time() . '.' . $avatar_img->extension();
            $avatar_img->move(public_path('image/avatar'), $imageName);
        }

        if ($request->screenshoot) {
            $screenshoot_img = $request->screenshoot;
            $screenshootName = $user->username . '-' . time() . '.' . $screenshoot_img->extension();
            $screenshoot_img->move(public_path('image/buktiss'), $screenshootName);
        }

        $user->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'avatar' => $imageName,
            'screenshoot' => $screenshootName
        ]);
        return redirect('/@' . $user->username);
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function index()
    {
        return view('users.index')->with('users', User::all());
    }
}
