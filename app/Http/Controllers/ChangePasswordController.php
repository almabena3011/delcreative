<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('users.password.edit');
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ],[
            'current_password.required' => 'Kata sandi lama wajib diisi',
            'password.required' => 'Kata sandi baru wajib diisi',
            'password_confirmation.same' => 'Konfirmasi kata sandi baru tidak valid',
            'password_confirmation.required' => 'Konfirmasi kata sandi wajib diisi',
        ]);

        // $rules = [
        //     'current_password' => 'required',
        //     'password' => 'required|min:8',
        //     'password_confirmation' => 'required|min:8|same:password',
        // ];

        // $messages = [
        //     'current_password.required' => 'Kata sandi lama wajib diisi',
        //     'password.required' => 'Kata sandi baru wajib diisi',
        //     'password_confirmation.required' => 'Konfirmasi kata sandi baru wajib diisi',
        //     'password_confirmation.same' => 'Konfirmasi kata sandi baru tidak valid',
        // ];

        // $validator = Validator::make($request, $rules, $messages);

        // if ($validator->fails()) {
        //     return back()->withInput()->withErrors($validator->messages());
        // }

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Kata sandi lama tidak valid');
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Kata sandi berhasil diubah');

    }
}
