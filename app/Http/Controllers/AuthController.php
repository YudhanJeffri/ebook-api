<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        //dd("registarsi berhasil");

        $token = $user->createToken('auth_token')->plainTextToken;

        $request->session()->flash('success', 'Registration successfull! Please login!');
        return redirect('/login');

        /* return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]); */
    }
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('loginError', 'Login failed!');
        } /* elseif (Auth::attempt($request)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login failed!'); */

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        //$request->session()->regenerate();
        //return redirect()->intended('/');
        /* 
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]); */
        Session::put('access_token', $token);
        return redirect('/');
        /* return view('buku.index', [
            'tittle' => 'Login',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]); */
    }
    public function indexLogin()
    {
        return view('login.index', [
            'halaman' => 'book',
        ]);
    }
    public function indexRegister()
    {
        return view('register.index', [
            'halaman' => 'book',
        ]);
    }
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
    public function me(Request $request)
    {
        return $request->user();
    }
    public function index()
    {
        $data = User::get();
        return response([
            'status' => 200,
            'message' => 'data terload',
            'data' => $data,
        ], 200);
    }
}
