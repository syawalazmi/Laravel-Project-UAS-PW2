<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function umkm() {
        $umkm = DB::table('umkm')->get();
        return view('umkm.view', ['umkm' => $umkm]);
    }

    public function create()
    {
        return view('umkm.create');
    }

    function submit(Request $request) {
        $umkm = new umkm();
        $umkm->nama = $request->nama;
        $umkm->modal = $request->modal;
        $umkm->pemilik = $request->pemilik;
        $umkm->alamat = $request->alamat;
        $umkm->website = $request->website;
        $umkm->email = $request->email;
        $umkm->kab_kota_id = $request->kab_kota_id;
        $umkm->rating = $request->rating;
        $umkm->kategori_umkm_id = $request->kategori_umkm_id;
        $umkm->pembina_id = $request->pembina_id;
        $umkm->save();

        return redirect()->route('umkm.view');
    }

    function edit($id) {
        $umkm = Umkm::find($id);
        return view('umkm.edit', compact('umkm'));
    }

    function update(Request $request, $id) {
        $umkm = Umkm::find($id);
        $umkm->nama = $request->nama;
        $umkm->modal = $request->modal;
        $umkm->pemilik = $request->pemilik;
        $umkm->alamat = $request->alamat;
        $umkm->website = $request->website;
        $umkm->email = $request->email;
        $umkm->kab_kota_id = $request->kab_kota_id;
        $umkm->rating = $request->rating;
        $umkm->kategori_umkm_id = $request->kategori_umkm_id;
        $umkm->pembina_id = $request->pembina_id;
        $umkm->update();

        return redirect()->route('umkm.view');
    }

    function delete($id) {
        $umkm = Umkm::find($id);
        $umkm->delete();
        return redirect()->route('umkm.view');
    }
}
