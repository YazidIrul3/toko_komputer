<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;


class ProdukController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $produk = Produk::where('nama_produk', 'like', "%$search%")->get();

        return view('produk.index', ['produk' => $produk]);
       }

       public function show(Produk $produk) {
        return view('produk.show', compact('produk'));
       }


    public function create() {
        $kategori = Kategori :: all();

        return view ('produk.create', compact('kategori'));
    }

    public function edit(Produk $produk) {
        $kategori = Kategori :: all();

        return view ('produk.edit',compact('produk','kategori'));
    }

    public function update(Request $request, Produk $produk) {
        $validated = $request->validate([
            'nama_produk' => 'required|min:3|max:255',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            // 'nama_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_id' => 'required',
        ]);


        $produk->update($validated);
        session::flash('edit_produk', 'Produk berhasil diedit');

        return redirect()->route('produk.index');
    }

    public function store( Request $request) {
        $validated = $request->validate([
            'nama_produk' => 'required|min:3|max:255',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            // 'nama_file' => 'required' ,
            'nama_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048 ',
            'kategori_id' => 'required',
        ]);

        $imageName = time().'.'.$request->nama_file->extension();

        $validated['nama_file'] = $imageName;
        $request->nama_file->move('images', $imageName);

        Produk::create($validated);

        session::flash('tambah_produk', 'Produk berhasil ditambahkan');

        return redirect()->route('produk.index');
    }

    public function destroy (Produk $produk) {
        $produk->delete();

        session::flash('delete_produk', 'Produk berhasil didelete');

        return redirect()->route('produk.index');
    }
}
