<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TitlePrice;
use Illuminate\Http\Request;

class TitlePriceController extends Controller
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
            'data' => TitlePrice::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.price.title.index', $data);
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

        return view('admin.pages.price.title.create', $data);
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

        TitlePrice::create([
            'tp_title' => $title,
            'tp_sub_title' => $sub_title,
        ]);
        
        return redirect()->to('adminpages/pricetitle');
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
            'data' => TitlePrice::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.price.title.edit', $data);
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
        
            TitlePrice::find($id)->update([
                'tp_title' => $title,
                'tp_sub_title' => $sub_title,
            ]);
            return redirect()->to("adminpages/pricetitle");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TitlePrice::find($id)->delete();

        return redirect()->to('adminpages/pricetitle');
    }
}   