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
        $title = $request->input('title');
        $description = $request->input('description');
        $name = $request->input('name');
        $price = $request->input('price');

        price::create([
            'price_title' => $title,
            'price_desc' => $description,
            'price_name' => $name,
            'price_nominal' => $price,
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
        $address = $request->input('address');
        $kode_pos = $request->input('kode_pos');
        $email = $request->input('email');
        $telpon = $request->input('telpon');
        $opening = $request->input('opening');
        $close_time = $request->input('close_time');
        $title = $request->input('title');
        $description = $request->input('description');
        
            price::find($id)->update([
                'price_title' => $title,
                'price_desc' => $description,
                'price_address' => $address,
                'price_kode_pos' => $kode_pos,
                'price_email' => $email,
                'price_tlpn' => $telpon,
                'price_opening' => $opening,
                'price_close' => $close_time,
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