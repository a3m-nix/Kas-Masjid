@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ganti Password</div>
                <div class="card-body">
                    {!! Form::open(['route' => ['gantipassword.update',0],'method' => 'PUT']) !!}
                        <div class="form-group">
                            <label for="email">Email</label>
                            {!! Form::text('email', Auth::user()->email, ['class' => 'form-control','autofocus','disabled' ]) !!}
                            <span class="text-secondary font-italic">
                                Email tidak bisa diganti
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            {!! Form::text('name', Auth::user()->name, ['class' => 'form-control','autofocus' ]) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        </div>
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
