<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas3Controller extends Controller
{
    public function index() {
        return view('tugas3.index');
    }

    public function show(Request $request) {
        $messages = [
            'required' => 'Kolom :attribute harus diisi.',
            'min' => 'Kolom :attribute tidak boleh kurang dari :min',
            'max' => 'Kolom :attribute tidak boleh lebih dari :max',
            'email' => 'Kolom :attribute harus berupa email yang valid',
            'date' => 'Kolom :attribute harus berupa tanggal',
            'between' => 'Panjang kolom :attribute harus diantara :min dan :max',
        ];

        $this->validate($request, [
            'nama' => 'required|min:4|max:16',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'tempat_lahir' => 'required|min:4|max:16',
            'tgl_lahir' => 'required|date',
            'alamat' => 'nullable|between:4,64',
            'motto' => 'nullable|max:128'
        ], $messages);

        $data = $request->only(['nama', 'jenis_kelamin', 'email', 'tempat_lahir', 'tgl_lahir', 'alamat', 'motto']);

        return view('tugas3.show', compact('data'));
    }
}
