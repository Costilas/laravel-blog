<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function index()
    {
        return view('user.index');
    }


    public function create()
    {
        return view('user.auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', 'Вы успешно зарегистрировались');
        Auth::login($user);

        return redirect()->home();
    }


    public function loginForm()
    {
        return view('user.auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            session()->flash('success', 'Вход выполнен!');

            if(Auth::user()->is_admin)
            {
                return redirect()->route('admin.index');
            }
            else {
                return redirect()->home();
            }
        }

        return redirect()->back()->with('error', 'Проверьте правильность заполненных данных');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->home()->with('notify', 'Выход выполнен');
    }


}
