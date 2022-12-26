<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SatuanPendidikan;
use App\Models\Guru;
use App\Models\Rombel;
use App\Models\PesertaDidik;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_users = User::all();
        $count_sp = SatuanPendidikan::count();
        $count_gr = Guru::count();
        $count_rombel = Rombel::count();
        $count_pd = PesertaDidik::count();
        return view('Template.Content.Dashboard.Main', [
            'data_users' => $data_users,
            'count_sp' => $count_sp,
            'count_gr' => $count_gr,
            'count_rombel' => $count_rombel,
            'count_pd' => $count_pd,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
