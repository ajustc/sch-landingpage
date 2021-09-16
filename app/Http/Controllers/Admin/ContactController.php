<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
            'data' => Contact::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.contact.index', $data);
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

        return view('admin.pages.contact.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = $request->input('address');
        $kode_pos = $request->input('kode_pos');
        $email = $request->input('email');
        $telpon = $request->input('telpon');
        $opening = $request->input('opening');
        $close_time = $request->input('close_time');
        $title = $request->input('title');
        $description = $request->input('description');

        contact::create([
            'contact_title' => $title,
            'contact_desc' => $description,
            'contact_address' => $address,
            'contact_kode_pos' => $kode_pos,
            'contact_email' => $email,
            'contact_tlpn' => $telpon,
            'contact_opening' => $opening,
            'contact_close' => $close_time,
        ]);
        
        return redirect()->to('adminpages/contact');
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
            'data' => contact::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.contact.edit', $data);
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
        
            contact::find($id)->update([
                'contact_title' => $title,
                'contact_desc' => $description,
                'contact_address' => $address,
                'contact_kode_pos' => $kode_pos,
                'contact_email' => $email,
                'contact_tlpn' => $telpon,
                'contact_opening' => $opening,
                'contact_close' => $close_time,
            ]);
            return redirect()->to("adminpages/contact");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contact::find($id)->delete();

        return redirect()->to('adminpages/contact');
    }
}