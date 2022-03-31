<!DOCTYPE html>
<html lang="en">
@extends('pengajar.head')

<body class="">
    <div class="wrapper ">
        @include('pengajar.sidebar')
        <div class="main-panel">
            @include('pengajar.navbar')
            <div class="content">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">File Tugas</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($submission as $pelamar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td></td>
                                    <td>{{ $pelamar->asal_sekolah_pelamar }}</td>
                                    <td><img src="{{ asset('/storage/' . $pelamar->file) }}" height="75px" width="100px">
                                    </td>
                                    <td>{{ $pelamar->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
