<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function produkSearch(Request $request) {
        // $produk = Produk :: all();

        // return view('produk.index', compact('produk'));

        $search = $request->input('search');
    $produk = Produk::where('nama_produk', 'like', "%$search%")->get();

    return view('produk.index', ['produk' => $produk]);
    }
}
