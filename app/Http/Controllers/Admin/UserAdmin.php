<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserAdmin extends Controller
{
    public function login()
    {
        $data = [];

        return view('admin.pages.login', $data);
    }

    public function loginstore(Request $request)
    {
        $credentials = request([
            'email',
            'password'
        ]);

        if (!Auth::attempt($credentials)) {
            return $this->error('Credentials not match', 401);
        }

        $token = $request->user()->createToken("asd")->plainTextToken;

        Cookie::make('sch', $token);

        return redirect()->to('/adminpages');
    }

    public function register()
    {
        $data = [];

        return view('admin.pages.register', $data);
    }

    public function registerstore(Request $request)
    {
        // $validate = $request->validate([
        //     'fullname'      => 'required',
        //     'email'     => 'required',
        //     'password'  => 'required'
        // ]);

        // if (!$validate) {
        //     $resValidate = [
        //         'status'    => "Error",
        //         'msg'       => "ValidationError",
        //     ];

        //     return redirect()->route('adminpages.register')->with("fail", "")
        // }

        // var_dump($validate);
        // print_r($validate);

        User::create([
            'name'      => $request->input('fullname'),
            'email'     => $request->input('email'),
            'password'  => bcrypt($request->input('password'))
        ]);

        // return redirect()->route('adminpages.index');
    }
}
