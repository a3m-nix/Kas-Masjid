@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA MASJID YANG ANDA URUS</div>
                <div class="card-body">
                    <a href="{{ route('masjid.create', []) }}" class="btn btn-info mb-2">
                        <i class="fas fa-file"></i> Tambah Data</a>
                    <table class="table table-bordered">
                        <thead class="table-dark">
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
                                <td>{{ $item->created_at->format('d F Y') }}</td>
                                <td class="align-right">
                                    {!! Form::open(['route' => ['masjid.destroy', $item->id],'method' => 'DELETE','onsubmit' => "return confirm('Anda Yakin ingin menghapus data ini ?')"]) !!}
                                    <a href="{{ route('masjid.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i> Detail </a>
                                    <a href="{{ route('masjid.edit', $item->id) }}" class="btn btn-info ml-2">
                                        <i class="fas fa-edit"></i> Edit</a>
                                    <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Delete</button>
                                    {!! Form::close() !!}
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
