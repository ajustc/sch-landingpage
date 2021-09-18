<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Biograpy;
use Illuminate\Http\Request;

class BiograpyController extends Controller
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
            'data' => Biograpy::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.biograpy.index', $data);
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

        return view('admin.pages.biograpy.create', $data);
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
        $sub_title = $request->input('sub_title');
        $desc = $request->input('desc');
        $desc1 = $request->input('desc1');

        Biograpy::create([
            'biograpy_title' => $title,
            'biograpy_sub_title' => $sub_title,
            'biograpy_desc' => $desc,
            'biograpy_desc1' => $desc1,
        ]);
        
        return redirect()->to('adminpages/biograpy');
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
            'data' => Biograpy::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.biograpy.edit', $data);
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
        $sub_title = $request->input('sub_title');
        $desc = $request->input('desc');
        $desc1 = $request->input('desc1');
        
            Biograpy::find($id)->update([
                'biograpy_title' => $title,
                'biograpy_sub_title' => $sub_title,
                'biograpy_desc' => $desc,
                'biograpy_desc1' => $desc1,
            ]);
            return redirect()->to("adminpages/biograpy");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Biograpy::find($id)->delete();

        return redirect()->to('adminpages/biograpy');
    }
}