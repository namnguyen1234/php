<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Inline\Element\Strong;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    public function show_register() {
        return view('User.register');
    }

    public function up_data_user(RegisterRequest $request) {
        $newuser = new user();
        $newuser->email = $request->email;
        $newuser->password = Hash::make($request->password);
        $newuser->name = $request->email;
        $newuser->save();

        return redirect()->route('login')->with('message', 'Bạn đã tạo thành công');
    }
}
