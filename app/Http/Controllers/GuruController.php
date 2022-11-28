<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\SpGuru;
use App\Models\SatuanPendidikan;
use Illuminate\Http\Request;
use Auth;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_gurus = Guru::all();
        return view('Template.Content.Guru.Index', [
            'data_gurus' => $data_gurus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_satuan_pendidikans = SatuanPendidikan::all();
        return view('Template.Content.Guru.Create', [
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
            'nama_lengkap_gr' => 'required',
            'jenjang_pendidikan' => 'required',
            'jenis_kelamin' => 'required',
            'sp_id' => 'required',
            'status_tugas' => 'required',
        ]);
        
        $create = Guru::create([
            'nama_lengkap_gr' => $request->nama_lengkap_gr,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'admin_id' => Auth::id(),
        ]);

        $create->satuanPendidikanGuru()->syncWithPivotValues($request->sp_id, ['status_tugas' => $request->status_tugas]);

        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        return view('Template.Content.Guru.Show', [
            'guru' => $guru,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('Template.Content.Guru.Edit', [
            'guru' => $guru,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Guru::find($id)->update([
            'nama_lengkap_gr' => $request->nama_lengkap_gr,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::find($id)->delete();
        return redirect()->route('guru.index');
    }
}
