<?php

namespace App\Http\Controllers;

use App\Models\SatuanPendidikan;
use App\Models\KabupatenKota;
use Illuminate\Http\Request;
use Auth;

class SatuanPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_satuan_pendidikans = SatuanPendidikan::all();
        return view('Template.Content.SatuanPendidikan.Index', [
            'data_satuan_pendidikans' => $data_satuan_pendidikans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kabkots = KabupatenKota::all();
        return view('Template.Content.SatuanPendidikan.Create', [
            'data_kabkots' => $data_kabkots,
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
            'satuan_pendidikan' => 'required',
            'kepsek' => 'required',
            'alamat' => 'required',
            'kabkot_id' => 'required',
        ]);
        
        $create = SatuanPendidikan::create([
            'satuan_pendidikan' => $request->satuan_pendidikan,
            'kepsek' => $request->kepsek,
            'alamat' => $request->alamat,
            'kabkot_id' => $request->kabkot_id,
            'admin_id' => Auth::id(),
        ]);

        return redirect()->route('satuan_pendidikan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SatuanPendidikan  $satuanPendidikan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $satuan_pendidikan = SatuanPendidikan::find($id);
        return view('Template.Content.SatuanPendidikan.Show', [
            'satuan_pendidikan' => $satuan_pendidikan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SatuanPendidikan  $satuanPendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_kabkots = KabupatenKota::all();
        $satuan_pendidikan = SatuanPendidikan::find($id);
        return view('Template.Content.SatuanPendidikan.Edit', [
            'data_kabkots' => $data_kabkots,
            'satuan_pendidikan' => $satuan_pendidikan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SatuanPendidikan  $satuanPendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = SatuanPendidikan::find($id)->update([
            'satuan_pendidikan' => $request->satuan_pendidikan,
            'kepsek' => $request->kepsek,
            'alamat' => $request->alamat,
            'kabkot_id' => $request->kabkot_id,
        ]);

        return redirect()->route('satuan_pendidikan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SatuanPendidikan  $satuanPendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SatuanPendidikan::find($id)->delete();
        return redirect()->route('satuan_pendidikan.index');
    }
}
