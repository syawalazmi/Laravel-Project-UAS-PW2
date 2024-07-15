<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }

    // function umkm

    // public function umkm() {
    //     $umkm = DB::table('umkm')->get();
    //     return view('umkm.view', ['umkm' => $umkm]);
    // }

    // public function createUmkm()
    // {
    //     return view('umkm.create');
    // }

    // function umkm_submit(Request $request) {
    //     $umkm = new umkm();
    //     $umkm->nama = $request->nama;
    //     $umkm->modal = $request->modal;
    //     $umkm->pemilik = $request->pemilik;
    //     $umkm->alamat = $request->alamat;
    //     $umkm->website = $request->website;
    //     $umkm->email = $request->email;
    //     $umkm->kab_kota_id = $request->kab_kota_id;
    //     $umkm->rating = $request->rating;
    //     $umkm->kategori_umkm_id = $request->kategori_umkm_id;
    //     $umkm->pembina_id = $request->pembina_id;
    //     $umkm->save();

    //     return redirect()->route('umkm.view');
    // }

    // public function editUmkm()
    // {
    //     return view('umkm.edit');
    // }

    // Function Kab_kota

    // public function kab_kota() {
    //     $kab_kota = DB::table('kab_kota')->get();
    //     $kab_kota = kab_kota::get();
    //     return view('kab_kota.view', compact('kab_kota'));
    // }

    // public function createKabKota()
    // {
    //     return view('kab_kota.create');
    // }

    // function kab_kota_submit(Request $request) {
    //     $kab_kota = new kab_kota();
    //     $kab_kota->nama = $request->nama;
    //     $kab_kota->latitude = $request->latitude;
    //     $kab_kota->longitude = $request->longitude;
    //     $kab_kota->provinsi_id = $request->provinsi_id;
    //     $kab_kota->save();

    //     return redirect()->route('kab_kota.view');
    // }

    // public function editKabKota()
    // {
    //     return view('kab_kota.edit');
    // }


    // Function Provinsi


    // public function provinsi() {
    //     $provinsi = DB::table('provinsi')->get();
    //     $provinsi = provinsi::get();
    //     return view('provinsi.view', compact('provinsi'));
    // }

    // public function createProvinsi()
    // {
    //     return view('provinsi.create');
    // }


    // function provinsi_submit(Request $request) {
    //     $provinsi = new provinsi();
    //     $provinsi->nama = $request->nama;
    //     $provinsi->ibukota = $request->ibukota;
    //     $provinsi->latitude = $request->latitude;
    //     $provinsi->longitude = $request->longitude;
    //     $provinsi->save();

    //     return redirect()->route('provinsi.view');
    // }

    // public function editProvinsi()
    // {
    //     return view('provinsi.edit');
    // }

    // Function Pembina

    // public function pembina() {
    //     $pembina = DB::table('pembina')->get();
    //     $pembina = pembina::get();
    //     return view('pembina.view', compact('pembina'));
    // }

    // public function createPembina()
    // {
    //     return view('pembina.create');
    // }

    // function pembina_submit(Request $request) {
    //     $pembina = new pembina();
    //     $pembina->nama = $request->nama;
    //     $pembina->gender = $request->gender;
    //     $pembina->tgl_lahir = $request->tgl_lahir;
    //     $pembina->tmp_lahir = $request->tmp_lahir;
    //     $pembina->keahlian = $request->keahlian;
    //     $pembina->save();

    //     return redirect()->route('pembina.view');
    // }

    // public function editPembina()
    // {
    //     return view('pembina.edit');
    // }


    // public function umkmDestroy(string $id): RedirectResponse
    // {
    //     umkm::find($id)->delete();
    //     return redirect(route('umkm.view'))->with('Pesan', 'Data berhasil dihapus!');
    // }
}