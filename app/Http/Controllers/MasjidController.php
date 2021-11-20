<?php

namespace App\Http\Controllers;

use App\Http\Requests\MasjidStoreRequest;
use App\Http\Requests\MasjidUpdateRequest;
use App\Masjid;
use Auth;

class MasjidController extends Controller
{
    public function index()
    {
        $data['models'] = Masjid::where('user_id', Auth::user()->id)
            ->latest()
            ->paginate(10);
        return view('masjid_index', $data);
    }

    public function create()
    {
        $data['objek'] = new Masjid();
        $data['method'] = 'POST';
        $data['route'] = 'masjid.store';
        $data['namaTombol'] = 'SIMPAN';
        return view('masjid_form', $data);
    }

    public function store(MasjidStoreRequest $request)
    {
        $request = array_merge($request->validated(), ['user_id' => Auth::user()->id]);
        Masjid::create($request);
        flash('Data berhasil disimpan')->success();
        return back();
    }

    public function edit($id)
    {
        $data['objek'] = Masjid::findOrFail($id);
        $data['method'] = 'PUT';
        $data['route'] = ['masjid.update', $id];
        $data['namaTombol'] = 'UPDATE';
        return view('masjid_form', $data);
    }

    public function update(MasjidUpdateRequest $request, $id)
    {
        Masjid::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        flash('Data sudah diubah');
        return redirect()->route('masjid.index');
    }
}
