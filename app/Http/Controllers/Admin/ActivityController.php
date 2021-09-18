<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
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
            'data' => Activity::all(),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.activity.index', $data);
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

        return view('admin.pages.activity.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $created = $request->input('created');
        $updated = $request->input('updated');

        Activity::create([
            'activity_image' => $image->getClientOriginalName(),
            'created_at' => $created,
            'updated_at' => $updated,
        ]);

        $image->store('/assets/activity');
        
        return redirect()->to('adminpages/activity');
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
            'data' => Activity::find($id),
            'session' => session()->get('schuser')
        ];

        return view('admin.pages.activity.edit', $data);
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
        
        $image = $request->input('image');
        $created = $request->input('created');
        $updated = $request->input('updated');
        
        if ($logo === null && $image === null) {
            Activity::find($id)->update([
            'activity_image' => $image,
            'created_at' => $created,
            'updated_at' => $updated,
            ]);
            return redirect()->to("adminpages/activity");
        }
        
            Activity::find($id)->update([
            'activity_image' => $image,
            'created_at' => $created,
            'updated_at' => $updated,
            ]);
            return redirect()->to("adminpages/activity");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activity::find($id)->delete();

        return redirect()->to('adminpages/activity');
    }
}