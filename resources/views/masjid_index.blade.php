@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA MASJID YANG ANDA URUS</div>

                <div class="card-body">
                    <a href="{{ route('masjid.create', []) }}" class="btn btn-info mb-2">Tambah Data</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>TGL BUAT</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('masjid.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Data tidak ada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $models->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
