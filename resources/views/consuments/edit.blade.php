@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Produk</h3>
                </div>
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ url('/' . $consument->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" class="form-control">
                        <div class="form-group">
                            <label for="">Nama Konsumen</label>
                            <input type="text" name="nama" class="form-control" value="{{$consument->nama}}">
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
                            <input type="text" name="no_polisi" class="form-control" value="{{$consument->no_polisi}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{$consument->tgl_lahir}}">
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
                            <input type="text" name="no_hp" class="form-control" value="{{$consument->no_hp}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection