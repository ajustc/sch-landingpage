<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListVisiMisi;
use Illuminate\Http\Request;

class ListVisiMisiController extends Controller
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
            'data' => ListVisiMisi::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.visimisi.list.index', $data);
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

        return view('admin.pages.visimisi.list.create', $data);
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

        ListVisiMisi::create([
            'visimisi_list_title' => $title,
            'visimisi_list_description' => $desc,
        ]);

        return redirect()->to('adminpages/visimisilist');
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
            'data' => ListVisiMisi::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.visimisi.list.edit', $data);
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
        $title = $request->input('title');
        $desc = $request->input('desc');

        ListVisiMisi::find($id)->update([
            'visimisi_list_title' => $title,
            'visimisi_list_description' => $desc,
        ]);

        return redirect()->to("adminpages/visimisilist");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ListVisiMisi::find($id)->delete();

        return redirect()->to('adminpages/visimisilist');
    }
}
