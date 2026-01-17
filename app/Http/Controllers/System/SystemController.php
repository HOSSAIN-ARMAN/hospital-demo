<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\System\SystemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Traits\FileSaver;
use App\User;

class SystemController extends Controller
{
     use FileSaver;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'ok';
        return view('admin.system.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.system.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
                'hospital_id' => 'required|integer|exists:hospitals,id',
            ]);

        // 3️⃣ Save to database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'hospital_name' => $request->hospital_name,
            'hospital_id' => $request->hospital_id,
            'route_no' => $request->route_no,
            'is_woner' => $request->is_woner,
            'is_manager' => $request->is_manager,
            'is_super_user' => $request->is_super_user,
            'is_admin' => $request->is_admin,
            'is_doctor' => $request->is_doctor,
            'is_stuff' => $request->is_stuff,
            'is_user' => $request->is_user,
            'status' => $request->status,
            'image_logo' => $this->storeImage($request, 'image_logo', 'hospitalLogo'),
            'image_benar' => $this->storeImage($request, 'image_benar', 'hospitalBenar') // store file path
        ]);
       

            return redirect()
            ->route('admin.system.index')
            ->with('message', 'Hospital created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\System\SystemModel  $systemModel
     * @return \Illuminate\Http\Response
     */
    public function show(SystemModel $systemModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\System\SystemModel  $systemModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemModel $systemModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\System\SystemModel  $systemModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemModel $systemModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\System\SystemModel  $systemModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemModel $systemModel)
    {
        //
    }
}
