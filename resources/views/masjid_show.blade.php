@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Masjid {{ $masjid->nama }}</div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Nama Masjid</dt>
                        <dd class="col-sm-9">: {{ $masjid->nama }}</dd>
                        <dt class="col-sm-3">Alamat</dt>
                        <dd class="col-sm-9">: {{ $masjid->alamat }}</dd>
                        <dt class="col-sm-3">Saldo</dt>
                        <dd class="col-sm-9">: {{ $masjid->getSaldoFormatRupiah() }}</dd>
                    </dl>
                    <hr>
                    <a href="{{ route('transaksi.create', []) }}" class="btn btn-primary">
                        <i class="fas fa-file"></i> Input Transaksi
                    </a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>NO</th>
                                <th>TANGGAL TRANSAKSI</th>
                                <th>JENIS</th>
                                <th>KETERANGAN</th>
                                <th>JUMLAH</th>
                                <th>USER</th>
                                <th>AKSI</th>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->getJumlahFormatRupiah() }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
