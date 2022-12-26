<?php

namespace App\Http\Controllers;

use App\Models\PesertaDidik;
use App\Models\Rombel;
use App\Models\SatuanPendidikan;
use Illuminate\Http\Request;

class PesertaDidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_peserta_didiks = PesertaDidik::all();
        return view('Template.Content.PesertaDidik.Index', [
            'data_peserta_didiks' => $data_peserta_didiks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_rombels = Rombel::all();
        return view('Template.Content.PesertaDidik.Create', [
            'data_rombels' => $data_rombels,
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
            'nama_pd' => 'required',
            'kelas' => 'required',
            'rombel_id' => 'required',
        ]);

        $id_sp = Rombel::find($request->rombel_id)->sp_id;
        
        $create = PesertaDidik::create([
            'nama_pd' => $request->nama_pd,
            'kelas' => $request->kelas,
            'rombel_id' => $request->rombel_id,
            'sp_id' => $id_sp,
        ]);

        return redirect()->route('peserta_didik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesertaDidik  $pesertaDidik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peserta_didik = PesertaDidik::find($id);
        return view('Template.Content.PesertaDidik.Show', [
            'peserta_didik' => $peserta_didik,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesertaDidik  $pesertaDidik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_rombels = Rombel::all();
        $peserta_didik = PesertaDidik::find($id);
        return view('Template.Content.PesertaDidik.Edit', [
            'data_rombels' => $data_rombels,
            'peserta_didik' => $peserta_didik,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesertaDidik  $pesertaDidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = PesertaDidik::find($id)->update([
            'nama_pd' => $request->nama_pd,
            'kelas' => $request->kelas,
            'rombel_id' => $request->rombel_id,
        ]);

        return redirect()->route('peserta_didik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesertaDidik  $pesertaDidik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PesertaDidik::find($id)->delete();
        return redirect()->route('peserta_didik.index');
    }
}
