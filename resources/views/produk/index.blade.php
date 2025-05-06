@extends('layout')

@section('konten')

@session('tambah_produk')
<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('tambah_produk') }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endsession

@session('edit_produk')
<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('edit_produk') }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endsession

@session('delete_produk')
<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('delete_produk') }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endsession

    <div class="d-flex py-4">
        <h1 class=" font-bold text-2xl">Daftar Produk</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{ route('produk.create') }}">Tambah Kategori</a>
        </div>
    </div>

    <form action="" method="GET" class=" flex flex-row items-center gap-5 w-full ">
        <input type="text" name="search" placeholder="Cari Kategori" class=" w-full bg-slate-50 shadow-sm py-1 px-2">
        <button class=" bg-blue-500 px-2 py-1 text-slate-50 font-bold">Search</button>
    </form>

   <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4   py-4">
    @foreach ($produk as $no => $produk)
    <div  class="flex flex-col gap-4 min-h-full h-full w-full bg-slate-50 shadow-sm p-3">
        <div class=" flex flex-col gap-1">
            <img src="images/{{$produk->nama_file}} " class=" w-full" alt="produk.img">
            <div class=" flex flex-col mt-3">
                <h1 class=" text-slate-50 w-fit bg-green-600 font-bold text-sm px-4 py-1 mb-1 rounded-full">{{$produk -> kategori-> nama_kategori}}</h1>
                <a href="{{ route('produk.show', $produk->id) }}" class=" hover:underline truncate  font-bold text-2xl ">{{ $produk->nama_produk }}</a>
            </div>
            <p>{{ $produk->deskripsi }}</p>
            <h1 class=" font-bold text-2xl  text-blue-600">Rp. {{ number_format($produk->harga) }}   </h1>
        </div>
        <div class =" flex flex-row gap-2">

            <a href="{{ route('produk.edit', $produk->id) }}" class=" bg-yellow-600 font-bold text-slate-50 px-4 py-2 text-sm">Edit</a>

            <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" id="form_delete">
                @csrf
                @method('DELETE')

                <button></button>
            </form>
             <a href="" onclick="confirmDelete(event,{{ $no }})" class=" bg-red-600 font-bold text-slate-50 px-4 py-2 text-sm">
                <h1>Delete</h1>
             </a>
        </div>
    </div>
    @endforeach
   </div>

   <script>



       const form = document.querySelectorAll('#form_delete');

       function confirmDelete(e,index) {
           e.preventDefault();
           console.log(index);

      Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            form[index].submit();
        }
    });
}
   </script>
@endsection
