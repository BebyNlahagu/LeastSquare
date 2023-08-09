<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function simpan(Request $request){
        Validator::make($request->all(),[
            'name' => 'reqiured',
            'email' => 'reqiured|email',
            'password' => 'reqiured|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('login');
    }

    public function login(){
        return view('auth.login');
    }

    public function masuk(Request $request){
        Validator::make($request->all(),[
            'email' => 'reqiured|email',
            'password' => 'reqiured|confirmed',
        ]);
        if(!Auth::attempt($request->only('email','password'),$request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' =>trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }

    public function profil(){
        return view('auth.profil');
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('auth.login');
    }
}
