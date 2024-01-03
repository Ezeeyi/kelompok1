@extends('layout.tamplate')
@section('konten')
<!-- START DATA -->

<div class="my-3 p-3 bg-body rounded shadow-sm">

    <div class="pb-3">
        <form class="d-flex" action="{{url('mahasiswa')}}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <div class="pb-3">
        <a href='{{ url('mahasiswa/create')}}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i =$data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>
                    <a href='{{ url('mahasiswa/'.$item->nim.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                    <form 
                        onsubmit="return confirm('Yakin ingin menghapus data?')" 
                        action="{{url('mahasiswa/'.$item->nim)}}" 
                        class="d-inline" 
                        method="post">
                        @csrf
                        @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach

        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
</div>
<footer>
    <a href='{{ url('mahasiswa/kelompok')}}' style="text-decoration: none">Kelompok Satu</a> - &copy; 2023 Teknologi Informasi A.
</footer>
@endsection