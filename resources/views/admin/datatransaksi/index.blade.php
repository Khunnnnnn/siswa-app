@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Transaksi</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jumlah Tagihan</th>
                <th scope="col">Status</th>
              
               
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayattransaksi as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td> {{ $transaksi-> nama_siswa }}</td>
                <td> {{ $transaksi-> nama_mapel }}</td>
                <td> {{ $transaksi-> jumlah_tagihan }}</td>
                <td> {{ $transaksi-> status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection