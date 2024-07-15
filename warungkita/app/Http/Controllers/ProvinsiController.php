<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function provinsi() {
        $provinsi = DB::table('provinsi')->get();
        $provinsi = provinsi::get();
        return view('provinsi.view', compact('provinsi'));
    }

    public function create()
    {
        return view('provinsi.create');
    }


    function submit(Request $request) {
        $provinsi = new provinsi();
        $provinsi->nama = $request->nama;
        $provinsi->ibukota = $request->ibukota;
        $provinsi->latitude = $request->latitude;
        $provinsi->longitude = $request->longitude;
        $provinsi->save();

        return redirect()->route('provinsi.view');
    }

    function edit($id) {
        $provinsi = Provinsi::find($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    function update(Request $request, $id) {
        $provinsi = Provinsi::find($id);
        $provinsi->nama = $request->nama;
        $provinsi->ibukota = $request->ibukota;
        $provinsi->latitude = $request->latitude;
        $provinsi->longitude = $request->longitude;
        $provinsi->update();

        return redirect()->route('provinsi.view');
    }

    function delete($id) {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
        return redirect()->route('provinsi.view');
    }
}