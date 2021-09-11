<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'session' => session()->get('schuser')
        ];

        return view('admin.index', $data);
    }
    
    public function login()
    {
        if (session()->get('schtoken')) {
            return redirect()->to('adminpages');
        }
        $data = [];

        return view('admin.pages.login', $data);
    }

    public function loginstore(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        $rules = [
            'email'     => 'required|email',
            'password'  => 'required'
        ];

        $request->validate($rules);

        $user = User::where('email', $email)->first();

        if (!Hash::check($password, $user->password)) {
            session()->flash('error', "Your password is wrong.");
            return redirect()->back();
        }

        $token = $user->createToken("user_token")->plainTextToken;

        $data = [
            'name'      => $user->name,
            'email'     => $user->password
        ];

        session()->put('schtoken', $token);
        session()->put('schuser', $data);

        return redirect()->to('/adminpages');
    }

    public function register()
    {
        if (session()->get('schtoken')) {
            return redirect()->to('adminpages');
        }
        $data = [];

        return view('admin.pages.register', $data);
    }

    public function registerstore(Request $request)
    {
        $rules = [
            'fullname'  => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ];

        $request->validate($rules);

        User::create([
            'name'      => $request->input('fullname'),
            'email'     => $request->input('email'),
            // 'password'  => bcrypt($request->input('password'))
            'password'  => $request->input('password')
        ]);

        return redirect()->route('adminpages.index');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->to('adminpages/login');
    }
}
