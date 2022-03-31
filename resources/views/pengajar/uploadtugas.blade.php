<!DOCTYPE html>
<html lang="en">
<!-- Head -->
@extends('pengajar.head')
<!-- Navbar -->

<body class="">
    <div class="wrapper ">
        @include('pengajar.sidebar')
        <div class="main-panel">
            @include('pengajar.navbar')
            <div class="content">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="row">
                    <form action="{{route('index.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile1" class="form-label">Masukkan File</label>
                            <input class="form-control" type="file" id="formFile" name="file">
                            <div id="emailHelp" class="form-text">File harus PDF</div>
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
        
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Users Behavior</h5>
                                <p class="card-category">24 Hours performance</p>
                            </div>
                            <div class="card-body ">
                                <canvas id=chartHours width="400" height="100"></canvas>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Email Statistics</h5>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-body ">
                                <canvas id="chartEmail"></canvas>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-primary"></i> Opened
                                    <i class="fa fa-circle text-warning"></i> Read
                                    <i class="fa fa-circle text-danger"></i> Deleted
                                    <i class="fa fa-circle text-gray"></i> Unopened
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar"></i> Number of emails sent
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="col-md-8">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-title">NASDAQ: AAPL</h5>
                                <p class="card-category">Line Chart with Points</p>
                            </div>
                            <div class="card-body">
                                <canvas id="speedChart" width="400" height="100"></canvas>
                            </div>
                            <div class="card-footer">
                                <div class="chart-legend">
                                    <i class="fa fa-circle text-info"></i> Tesla Model S
                                    <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                </div>
                                <hr />
                                <div class="card-stats">
                                    <i class="fa fa-check"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>

    </div>


    </div>
</body>

</html>