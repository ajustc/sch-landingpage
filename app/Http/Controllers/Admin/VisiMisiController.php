<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
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
            'data' => VisiMisi::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.visimisi.index', $data);
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

        return view('admin.pages.visimisi.create', $data);
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

        VisiMisi::create([
            'visimisi_title' => $title,
            'visimisi_description' => $desc,
            'visimisi_picture' => $pict->getClientOriginalName(),
        ]);

        $pict->move('assets/visimisi', $pict->getClientOriginalName());

        return redirect()->to('adminpages/visimisi');
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
        if (!session()->get('schtoken')) {
            return redirect()->to('adminpages/login');
        }
        $data = [
            'data' => VisiMisi::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.visimisi.edit', $data);
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
            VisiMisi::find($id)->update([
                'visimisi_title' => $title,
                'visimisi_description' => $desc,
                'visimisi_picture' => $oldPict,
            ]);
            return redirect()->to("adminpages/visimisi");
        }
        VisiMisi::find($id)->update([
            'visimisi_title' => $title,
            'visimisi_description' => $desc,
            'visimisi_picture' => $pict,
        ]);
        return redirect()->to("adminpages/visimisi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VisiMisi::find($id)->delete();

        return redirect()->to('adminpages/visimisi');
    }

    public function used($id)
    {
        $setOldUse = VisiMisi::where('visimisi_use', "used")->get()->toArray();

        if (!$setOldUse) {
            VisiMisi::find($id)->update([
                'visimisi_use' => 'used'
            ]);

            return redirect()->back();
        } else {
            foreach ($setOldUse as $data) {
                VisiMisi::where('visimisi_use', $data['visimisi_use'])->update([
                    'visimisi_use' => 'unused'
                ]);
            }

            VisiMisi::find($id)->update([
                'visimisi_use' => 'used'
            ]);

            return redirect()->back();
        }
    }
}
