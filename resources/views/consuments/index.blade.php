@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Manajemen Konsumen</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/create') }}" class="btn btn-primary btn-sm float-right">Tambah
                                Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                    @endif
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Kendaraan</th>
                                <th>No Polisi</th>
                                <th>Tanggal lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>No. HP</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($consuments as $consument)
                            <tr>
                                <td>{{ $consument->nama }}</td>
                                <td>{{ $consument->jenis_kendaraan }}</td>
                                <td>{{ $consument->no_polisi }}</td>
                                <td>{{ $consument->tgl_lahir}}</td>
                                <td>{{ $consument->jenis_kelamin }}</td>
                                <td>{{ $consument->no_hp }}</td>
                                <td>
                                    <form action="{{ url('/' . $consument->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" class="form-control">
                                        <a href="{{ url('/' . $consument->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="6">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection