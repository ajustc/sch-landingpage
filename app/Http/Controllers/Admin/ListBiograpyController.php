<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListBiograpy;
use Illuminate\Http\Request;

class ListBiograpyController extends Controller
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
            'data' => ListBiograpy::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.biograpy.list.index', $data);
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

        return view('admin.pages.biograpy.list.create', $data);
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
        $image = $request->file('image');
        $list1 = $request->input('list1');
        $list2 = $request->input('list2');
        $list3 = $request->input('list3');
        $list4 = $request->input('list4');
        $desc = $request->input('desc');

        ListBiograpy::create([
            'bl_title' => $title,
            'bl_sub_title' => $sub_title,
            'bl_image' => $image->getClientOriginalName(),
            'bl_list1' => $list1,
            'bl_list2' => $list2,
            'bl_list3' => $list3,
            'bl_list4' => $list4,
            'bl_desc' => $desc,
        ]);
        $image->store('/assets/ListBiograpy');
        return redirect()->to('adminpages/biograpylist');
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

        return view('admin.pages.biograpy.list.edit', $data);
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
        $oldImage = $request->input('oldImage');
        
        $title = $request->input('title');
        $sub_title = $request->input('sub_title');
        $image = $request->file('image');
        $list1 = $request->input('list1');
        $list2 = $request->input('list2');
        $list3 = $request->input('list3');
        $list4 = $request->input('list4');
        $desc = $request->input('desc');

        if ($logo === null && $pict === null) {
            Biograpy::find($id)->update([
                'bl_title' => $title,
                'bl_sub_title' => $sub_title,
                'bl_image' => $image,
                'bl_list1' => $list1,
                'bl_list2' => $list2,
                'bl_list3' => $list3,
                'bl_list4' => $list4,
                'bl_desc' => $desc,
            ]);
            return redirect()->to("adminpages/bannerlist");
        }
        
            Biograpy::find($id)->update([
                'bl_title' => $title,
                'bl_sub_title' => $sub_title,
                'bl_image' => $image,
                'bl_list1' => $list1,
                'bl_list2' => $list2,
                'bl_list3' => $list3,
                'bl_list4' => $list4,
                'bl_desc' => $desc,
            ]);
            return redirect()->to("adminpages/biograpylist");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ListBiograpy::find($id)->delete();

        return redirect()->to('adminpages/biograpylist');
    }
}