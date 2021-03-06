<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'data' => Banner::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.banner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.banner.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $desc = $request->input('desc');
        $pict = $request->file('pict');

        Banner::create([
            'banner_title' => $title,
            'banner_description' => $desc,
            'banner_picture' => $pict->getClientOriginalName(),
        ]);

        $pict->move('assets/banner', $pict->getClientOriginalName());

        return redirect()->to('adminpages/banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => Banner::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.banner.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oldPict = $request->input('oldPict');

        $title = $request->input('title');
        $desc = $request->input('desc');
        $pict = $request->file('pict');

        if ($logo === null && $pict === null) {
            Banner::find($id)->update([
                'banner_title' => $title,
                'banner_description' => $desc,
                'banner_picture' => $oldPict,
            ]);
            return redirect()->to("adminpages/banner");
        }
        Banner::find($id)->update([
            'banner_title' => $title,
            'banner_description' => $desc,
            'banner_picture' => $pict,
        ]);
        return redirect()->to("adminpages/banner");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();

        return redirect()->to('adminpages/banner');
    }

    public function used($id)
    {
        $setOldUse = Banner::where('banner_use', "used")->get()->toArray();

        if (!$setOldUse) {
            Banner::find($id)->update([
                'banner_use' => 'used'
            ]);

            return redirect()->back();
        } else {
            foreach ($setOldUse as $data) {
                Banner::where('banner_use', $data['banner_use'])->update([
                    'banner_use' => 'unused'
                ]);
            }

            Banner::find($id)->update([
                'banner_use' => 'used'
            ]);

            return redirect()->back();
        }
    }
}
