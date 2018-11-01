<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas1Controller extends Controller
{
    public function nomor1() {
        return view('tugas1.nomor1');
    }

    public function nomor2(Request $request) {
        $data = $request->only(['nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'email', 'alamat']);

        return view('tugas1.nomor2', compact('data'));
    }
    
    public function nomor3() {
        return view('tugas1.nomor3');
    }

    public function nomor3_put(Request $request) {
        $data = $request->only(['nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'email', 'alamat']);

        return view('tugas1.nomor2', compact('data'));
    }
}