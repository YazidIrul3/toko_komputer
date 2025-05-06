@extends('layout')

@section('konten')

@session('tambah_kategori')
<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('tambah_kategori') }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endsession

@session('edit_kategori')
<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('edit_kategori') }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endsession

@session('delete_kategori')
<script>

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('delete_kategori') }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endsession


    <div class="d-flex">
        <h4>Daftar Kategori</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{ route('kategori.create') }}">Tambah Kategori</a>
        </div>
    </div>

    <form action="" method="GET" class=" flex flex-row items-center gap-5 w-full mt-3 ">
        <input type="text" name="search" placeholder="Cari Kategori" class=" w-full bg-slate-50 shadow-sm py-1 px-2">
        <button class=" bg-blue-500 px-2 py-1 text-slate-50 font-bold">Search</button>
    </form>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $no => $kategori)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" id="form_delete">
                            @csrf
                            @method('DELETE')

                            <button></button>
                        </form>
                            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>

                            <button onclick="confirmDelete(event,{{ $no }})" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
