@extends('layout')

@section('konten')
    <h4 class="mt-3 mb-4 font-bold text-2xl">Edit Produk</h4>

    <form action="{{ route('produk.update', $produk->id) }}" method="post" class="row g-3 mt3" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" value="{{ $produk->nama_produk }}" name="nama_produk" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Harga Produk</label>
        <input type="text" value="{{ $produk->harga }}" name="harga" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Stok Produk</label>
        <input onchange="" type="text" name="stok" value="{{ $produk->stok}}" class="form-control">
    </div>


    <div class="mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <input onchange="" type="text" name="deskripsi" value="{{ $produk->deskripsi }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori Produk</label>

        <select name="kategori_id" id="">
            <option value="{{ $produk->id }}">
                {{ $produk->kategori -> nama_kategori }}
            </option>
            @foreach ($kategori as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label class="form-label">Gambar Produk</label>
        <img src="/images/{{$produk -> nama_file}}" class=" w-[200px]" alt="">
        <input  value="{{ $produk->nama_file }}" onchange="" hidden type="file" name="" class="form-control">
        <input hidden value="{{ $produk->nama_file }}" onchange="" type="text" name="nama_file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Edit</button>
    </form>
@endsection
