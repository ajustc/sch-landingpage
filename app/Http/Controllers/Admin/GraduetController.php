<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Graduet;
use Illuminate\Http\Request;

class GraduetController extends Controller
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
            'data' => Graduet::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.graduet.index', $data);
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

        return view('admin.pages.graduet.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $date = $request->input('date');
        $desc = $request->input('desc');

        Graduet::create([
            'graduet_name' => $name,
            'graduet_date' => $date,
            'graduet_desc' => $desc,
        ]);
        
        return redirect()->to('adminpages/graduet');
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
            'data' => Graduet::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.graduet.edit', $data);
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
        $name = $request->input('name');
        $date = $request->input('date');
        $desc = $request->input('desc');
        
            Graduet::find($id)->update([
                'graduet_name' => $name,
                'graduet_date' => $date,
                'graduet_desc' => $desc,
            ]);
            return redirect()->to("adminpages/graduet");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Graduet::find($id)->delete();

        return redirect()->to('adminpages/graduet');
    }
}