<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validacion
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('agenda.index'));
    }

    public function login(Request $request)
    {
        // Validacion
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return to_route('agenda.index');
        }else{
            return to_route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}

