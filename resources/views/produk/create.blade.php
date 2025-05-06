@extends('layout')

@section('konten')
    <h4 class="mt-3">Tambah Produk</h4>

    <form action="{{ route('produk.store') }}" method="post" class="row g-3 mt3" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga Produk</label>
        <input type="text" name="harga" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Stok Produk</label>
        <input onchange="" type="text" name="stok" class="form-control">
    </div>


    <div class="mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <input onchange="" type="text" name="deskripsi" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori Produk</label>

        <select name="kategori_id" id="">
            @foreach ($kategori as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label class="form-label">Gambar Produk</label>
        <input onchange="" type="file" name="nama_file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
@endsection
