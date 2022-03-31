<!DOCTYPE html>
<html lang="en">
@extends('pelamar.head')

<body class="">
    <div class="wrapper ">
        @include('pelamar.sidebar')
        <div class="main-panel">
            @include('pelamar.navbar')
            <div class="content">
                <form action="{{route('pelamar.store')}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <input class="form-control" type="hidden" value="{{ $data_pelamar->id_user }}"aria-label="default input example" name="id_user">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Masukkan Nama</label>
                    <input class="form-control" type="text" disabled value="{{ $data_pelamar->nama_pelamar }}" aria-label="default input example" name="name">

                    <input class="form-control" type="hidden"  value="{{ $data_pelamar->nama_pelamar }}" aria-label="default input example" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgllahir">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Email</label>
                    <input class="form-control" type="email"disabled value="{{ $data_pelamar->email_pelamar }}"aria-label="default input example" name="email">
               
                    <input class="form-control" type="hidden" value="{{ $data_pelamar->email_pelamar }}"aria-label="default input example" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Asal Sekolah</label>
                    <input class="form-control" type="text" placeholder="Asal Sekolah Anda" aria-label="default input example" name="asalsekolah">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Masukkan Kartu Tanda Pelajar Anda</label>
                    <input class="form-control" type="file" id="formFile" name="ktm">
                    <div id="emailHelp" class="form-text">File harus jpg</div>
                </div>
                <div class="mb-3">
                    <label for="formFile1" class="form-label">Masukkan Foto Anda</label>
                    <input class="form-control" type="file" id="formFile" name="profile">
                    <div id="emailHelp" class="form-text">Gunakan Foto Berlatar Merah dan Berdasi</div>
                    <div id="emailHelp" class="form-text">File harus jpg</div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Masukkan Curriculum Vitae</label>
                    <input class="form-control" type="file" id="formFile" name="cv">
                    <div id="emailHelp" class="form-text">File harus jpg</div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>