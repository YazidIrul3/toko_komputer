<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Session;

class KategoriController extends Controller
{
   public  function index(Request $request){
        $search = $request->input('search');
        $kategori = Kategori::where('nama_kategori', 'like', "%$search%")->get();

        return view('kategori.index', ['kategori' => $kategori]);
    }

   public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama_kategori' => 'required|min:3|max:255',
        ]);

        Kategori::create($validated);
        session::flash('tambah_kategori', 'Kategori berhasil ditambahkan');
        return redirect()->route('kategori.index');
    }

    public function edit(Kategori $kategori){
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori){
        $validated = $request->validate([
            'nama_kategori' => 'required|min:3|max:255',
        ]);

        $kategori->update($validated);
        
        session::flash('edit_kategori', 'Kategori berhasil diedit');

        return  redirect()->route('kategori.index');
    }

    public function destroy(Kategori $kategori){
        $kategori->delete();

        session::flash('delete_kategori', 'Kategori berhasil didelete');

        return redirect()->route('kategori.index');
    }

}
