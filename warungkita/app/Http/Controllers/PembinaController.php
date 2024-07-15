<?php

namespace App\Http\Controllers;

use App\Models\pembina;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    public function pembina() {
        $pembina = DB::table('pembina')->get();
        $pembina = pembina::get();
        return view('pembina.view', compact('pembina'));
    }

    public function create()
    {
        return view('pembina.create');
    }

    function submit(Request $request) {
        $pembina = new Pembina();
        $pembina->nama = $request->nama;
        $pembina->gender = $request->gender;
        $pembina->tgl_lahir = $request->tgl_lahir;
        $pembina->tmp_lahir = $request->tmp_lahir;
        $pembina->keahlian = $request->keahlian;
        $pembina->save();

        return redirect()->route('pembina.view');
    }

    function edit($id) {
        $pembina = Pembina::find($id);
        return view('pembina.edit', compact('pembina'));
    }

    function update(Request $request, $id) {
        $pembina = Pembina::find($id);
        $pembina->nama = $request->nama;
        $pembina->gender = $request->gender;
        $pembina->tgl_lahir = $request->tgl_lahir;
        $pembina->tmp_lahir = $request->tmp_lahir;
        $pembina->keahlian = $request->keahlian;
        $pembina->update();

        return redirect()->route('pembina.view');
    }

    function delete($id) {
        $pembina = Pembina::find($id);
        $pembina->delete();
        return redirect()->route('pembina.view');
    }
}