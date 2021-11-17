<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('User.Login');
    }

    public function login(UserRequest $request)
    {
        $data = $request->only('email', 'password');

        return  Auth::attempt($data) ?
            redirect()->route('admin')
            : 'Tài khoản không tồn tại' . view('User.register');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function admin()
    {
        return view('User.admin', [
            'users' => User::get()
        ]);
    }

    public function show_create()
    {
        return view('User.create');
    }

    public function DeleteAll()
    {
        DB::table('users')->truncate();

        return redirect()->route('show_dang_ki');
    }

    public function Delete($id)
    {
        $data = User::find($id);
        $data->delete();
        
        return redirect()->route('admin');
    }

    public function Edit($id)
    {
        $edit = User::find($id);

        return view('User.edit', ['edit' => $edit]);
    }

    public function Update($id, Request $request)
    {
        $user = User::find($id);
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin');
    }
}
