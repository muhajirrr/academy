<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tugas4Controller extends Controller
{
    public function create() {
        $categories = DB::table('kategoris')->select('*')->get();

        return view('tugas4.create', compact('categories'));
    }

    public function store(Request $request) {
        DB::table('products')->insert([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect(route('tugas4'));
    }

    public function show() {
        $products = DB::table('products')->select('*')->get();

        return view('tugas4.show', compact('products'));
    }
}
