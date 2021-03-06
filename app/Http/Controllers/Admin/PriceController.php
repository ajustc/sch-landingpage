<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
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
            'data' => Price::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.price.index', $data);
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

        return view('admin.pages.price.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $title = $request->input('title');
        $name = $request->input('name');
        $sub_name = $request->input('sub_name');
        $price = $request->input('price');
        $list1 = $request->input('list1');
        $list2 = $request->input('list2');
        $list3 = $request->input('list3');
        $list4 = $request->input('list4');
        $list5 = $request->input('list5');

        price::create([
            // 'price_title' => $title,
            'price_name' => $name,
            'price_sub_name' => $sub_name,
            'price_nominal' => $price,
            'price_list1' => $list1,
            'price_list2' => $list2,
            'price_list3' => $list3,
            'price_list4' => $list4,
            'price_list5' => $list5,
        ]);
        
        return redirect()->to('adminpages/price');
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
            'data' => price::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.price.edit', $data);
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
        // $title = $request->input('title');
        $name = $request->input('name');
        $sub_name = $request->input('sub_name');
        $price = $request->input('price');
        $list1 = $request->input('list1');
        $list2 = $request->input('list2');
        $list3 = $request->input('list3');
        $list4 = $request->input('list4');
        $list5 = $request->input('list5');
        
            price::find($id)->update([
            'price_name' => $name,
            'price_sub_name' => $sub_name,
            'price_nominal' => $price,
            'price_list1' => $list1,
            'price_list2' => $list2,
            'price_list3' => $list3,
            'price_list4' => $list4,
            'price_list5' => $list5,
            ]);
            return redirect()->to("adminpages/price");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        price::find($id)->delete();

        return redirect()->to('adminpages/price');
    }
}