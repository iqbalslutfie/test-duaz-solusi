@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Konsumen</h3>
                </div>
                <div class="card-body">
                    <!-- MENAMPILKAN ERROR APABILA TERDAPAT FLASH MESSAGE ERROR -->
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ url('/') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Konsumen</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama konsumen">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kendaraan</label>
                            <select class="form-control" name="jenis_kendaraan">
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">No Polisi</label>
                            <input type="text" name="no_polisi" class="form-control" placeholder="Masukkan no polisi">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input type="text" name="no_hp" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection