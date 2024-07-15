<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\kab_kota;
use Illuminate\Http\Request;

class kab_kotaController extends Controller
{
    public function kab_kota() {
        $kab_kota = DB::table('kab_kota')->get();
        $kab_kota = kab_kota::get();
        return view('kab_kota.view', compact('kab_kota'));
    }

    public function create()
    {
        return view('kab_kota.create');
    }

    function submit(Request $request) {
        $kab_kota = new kab_kota();
        $kab_kota->nama = $request->nama;
        $kab_kota->latitude = $request->latitude;
        $kab_kota->longitude = $request->longitude;
        $kab_kota->provinsi_id = $request->provinsi_id;
        $kab_kota->save();

        return redirect()->route('kab_kota.view');
    }

    function edit($id) {
        $kab_kota = Kab_kota::find($id);
        return view('kab_kota.edit', compact('kab_kota'));
    }

    function update(Request $request, $id) {
        $kab_kota = Kab_kota::find($id);
        $kab_kota->nama = $request->nama;
        $kab_kota->latitude = $request->latitude;
        $kab_kota->longitude = $request->longitude;
        $kab_kota->provinsi_id = $request->provinsi_id;
        $kab_kota->update();

        return redirect()->route('kab_kota.view');
    }

    function delete($id) {
        $kab_kota = Kab_kota::find($id);
        $kab_kota->delete();
        return redirect()->route('kab_kota.view');
    }
}