@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BUAT DATA MASJID</div>

                <div class="card-body">
                    {!! Form::model($objek, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group">
                        <label for="nama">Nama Masjid</label>
                        {!! Form::text('nama', null, ['class' => 'form-control','placeholder']) !!}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="alamt">Alamat</label>
                        {!! Form::textarea('alamat', null, ['class' => 'form-control','rows' => 3]) !!}
                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                    </div>
                    {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
