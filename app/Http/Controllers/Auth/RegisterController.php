<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'min:8', 'same:password'],
            'role' => ['required'],
            'idrole' => ['required', 'unique:users'],
            'screenshoot' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],

        ], [
            'fullname.required' => 'nama lengkap wajib diisi',
            'idrole.required' => 'NIM/NIDN/NIP wajib diisi',
            'role.required' => 'role wajib diisi',
            'screenshoot.required' => 'screenshoot profile CIS wajib diisi',
            'idrole.unique' => 'NIM/NIDN/NIP sudah pernah dibuat',
            'username.unique' => 'Nama Pengguna sudah pernah dibuat',
            'email.unique' => 'Email sudah pernah dibuat',
            'password_confirmation.same' => 'Konfirmasi kata sandi baru tidak valid',
            'password_confirmation.required' => 'Konfirmasi kata sandi wajib diisi',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        $imgName = null;
        $imgName = $data['screenshoot']->getClientOriginalName() . '-' . time() . '-' . $data['screenshoot']->extension();

        $data['screenshoot']->move(public_path('image/buktiss'), $imgName);

        return User::create([
            'fullname' => $data['fullname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'idrole' => $data['idrole'],
            'screenshoot' => $imgName
        ]);
    }
}
