<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_users = User::all();
        return view('Template.Content.Users.Index', [
            'data_users' => $data_users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Template.Content.Users.Create');
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
            'email' => 'required|unique:users',
            'no_hp' => 'required|unique:users',
            'password' => 'required',
            'level_user' => 'required',
        ]);
        
        $create = User::create([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'level_user' => $request->level_user,
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('Template.Content.Users.Show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Template.Content.Users.Edit', [
            'user' => $user,
        ]);
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
        $update = User::find($id)->update([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'no_hp' => $request->no_hp,
            'level_user' => $request->level_user,
        ]);
        
        if ($request->password != null) {
            User::find($id)->update([
                'password' => Hash::make($request->password),
            ]);
        };

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index');
    }
}
