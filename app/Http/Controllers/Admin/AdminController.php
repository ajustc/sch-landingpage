<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    public function index()
    {
        echo "<pre>";
        print_r(Cookie::get('sch'));
        echo "</pre>";

        var_dump($_COOKIE);
    }
}
