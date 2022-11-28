<?php

namespace App\Http\Controllers;

use App\Models\KabupatenKota;
use Illuminate\Http\Request;

class KabupatenKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kabkots = KabupatenKota::all();
        return view('Template.Content.KabupatenKota.Index', compact([
            'data_kabkots',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Template.Content.KabupatenKota.Create');
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
            'kabkot' => 'required',
        ]);
        
        $create = KabupatenKota::create([
            'kabkot' => $request->kabkot,
        ]);

        return redirect()->route('kabupaten_kota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KabupatenKota  $kabupatenKota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kabkot = KabupatenKota::find($id);
        return view('Template.Content.KabupatenKota.Show', [
            'kabkot' => $kabkot,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KabupatenKota  $kabupatenKota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kabkot = KabupatenKota::find($id);
        return view('Template.Content.KabupatenKota.Edit', [
            'kabkot' => $kabkot,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KabupatenKota  $kabupatenKota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = KabupatenKota::find($id)->update([
            'kabkot' => $request->kabkot,
        ]);

        return redirect()->route('kabupaten_kota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KabupatenKota  $kabupatenKota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KabupatenKota::find($id)->delete();
        return redirect()->route('kabupaten_kota.index');
    }
}
