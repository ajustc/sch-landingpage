<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Biograpy;
use App\Models\ListVisiMisi;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'banner'            => Banner::where('banner_use', "used")->get(),
            'visimisi'          => VisiMisi::where('visimisi_use', "used")->get(),
            'visimisi_list'     => ListVisiMisi::all(),
            'biograpy'          => Biograpy::where('biograpy_use', "used")->get(),
        ];

        return view('user.index', $data);
    }
}
