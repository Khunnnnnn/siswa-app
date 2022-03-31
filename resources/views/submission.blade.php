@extends('layouts.main')

<!-- ======= Header ======= -->
@include('layouts.navbar')
<!-- End Header -->

<div class="container">
        <h2 class="alert alert-success text-center">
            Input Data Tugas Siswa
        </h2>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"> Tugas Siswa </h3><br><br>
                        <h6 class="card-title"> Kelas : </h6>
                        <h6 class="card-title"> Pengajar : </h6>
                        <h6 class="card-title"> Keterangan : </h6>
                       
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        {{-- jika mengirim file wajib menggunakan enctype="multipart/form-data" --}}
                        <form action="{{route('submission.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Input File</label>
                                <input type="file" class="form-control" id="nama" name="file">
                            </div>
                            {{-- pesan error  --}}
                            @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <textarea name="keterangan" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            {{-- pesan error  --}}
                            @error('keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" id="tombol-simpan" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-7 mt-5" >
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">File</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- menampilkan data  --}}
                        @foreach ($data as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                {{-- jika ekstensi file adalah png, jpg atau jpeg maka tampilkan gambar  --}}
                                @if( in_array(pathinfo($item->file, PATHINFO_EXTENSION), ['png', 'jpg', 'JPEG']))
                                    <img src="{{asset('file_upload')}}/{{$item->file}} " style="width: 50%; height: auto;">
                                @else
                                   <p>{{$item->file}}</p>
                                    
                                @endif
                            </td>
                            <td>{{$item->keterangan}}</td>
                            <td><form method="post" action="/submission/{{ $item->id }}" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                           
                        </td>
                        <td><embed type="application/pdf" src="{{asset('file_upload')}}/{{$item->file}}" width="600" height="400"></embed></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
