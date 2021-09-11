<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    public function pendaftaran()
    {
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'session' => session()->get('schuser')
        ];

        return view('admin.pendaftaran', $data);
    }
    public function biografi()
    {
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'session' => session()->get('schuser')
        ];

        return view('admin.biografi', $data);
    }
    public function kegiatan()
    {
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'session' => session()->get('schuser')
        ];

        return view('admin.kegiatan', $data);
    }
}
