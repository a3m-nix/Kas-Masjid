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
                        <dd class="col-sm-9">: {{ $masjid->saldo }}</dd>
                    </dl>
                    <hr>
                    <a href="{{ route('transaksi.create', []) }}" class="btn btn-primary">
                        <i class="fas fa-file"></i> Input Transaksi
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
