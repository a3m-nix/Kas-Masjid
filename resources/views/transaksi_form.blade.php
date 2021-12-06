@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TRANSAKSI KEUANGAN MASJID {{ strtoupper(session('masjid')->nama) }}</div>

                <div class="card-body">
                    {!! Form::model($objek, ['route' => $route, 'method' => $method,'id' => 'myForm']) !!}
                    <div class="form-group">
                        <label for="keterangan">Nama Transaksi</label>
                        {!! Form::text('keterangan', null, ['class' => 'form-control','placeholder']) !!}
                        <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Transaksi</label>
                        {!! Form::select('jenis', [
                            'pengeluaran' => 'Pengeluaran',
                            'pemasukan' => 'Pemasukan'
                        ], null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('jenis') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Transaksi</label>
                        {!! Form::text('jumlah', null, ['class' => 'form-control format-rupiah']) !!}
                        <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                    </div>
                    {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
