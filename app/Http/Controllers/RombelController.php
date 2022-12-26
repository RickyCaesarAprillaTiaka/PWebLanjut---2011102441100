<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use App\Models\Guru;
use App\Models\SatuanPendidikan;
use Illuminate\Http\Request;
use Auth;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_rombels = Rombel::all();
        return view('Template.Content.Rombel.Index', [
            'data_rombels' => $data_rombels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_gurus = Guru::all();
        $data_satuan_pendidikans = SatuanPendidikan::all();
        return view('Template.Content.Rombel.Create', [
            'data_gurus' => $data_gurus,
            'data_satuan_pendidikans' => $data_satuan_pendidikans,
        ]);
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
            'nama_rombel' => 'required',
            'wali_kelas' => 'required',
        ]);
        
        $create = Rombel::create([
            'nama_rombel' => $request->nama_rombel,
            'wali_kelas' => $request->wali_kelas,
            'admin_id' => Auth::id(),
            'sp_id' => $request->sp_id,
        ]);

        return redirect()->route('rombel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rombel = Rombel::find($id);
        return view('Template.Content.Rombel.Show', [
            'rombel' => $rombel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_gurus = Guru::all();
        $rombel = Rombel::find($id);
        return view('Template.Content.Rombel.Edit', [
            'data_gurus' => $data_gurus,
            'rombel' => $rombel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Rombel::find($id)->update([
            'nama_rombel' => $request->nama_rombel,
            'wali_kelas' => $request->wali_kelas,
        ]);

        return redirect()->route('rombel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rombel::find($id)->delete();
        return redirect()->route('rombel.index');
    }
}
