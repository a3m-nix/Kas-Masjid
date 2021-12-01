<?php

namespace App\Http\Controllers;

use App\Transaksi;

class TransaksiController extends Controller
{
    public function create()
    {
        $masjidId = session('masjid_id');
        $data['objek'] = new Transaksi();
        $data['method'] = 'POST';
        $data['route'] = 'transaksi.store';
        $data['namaTombol'] = 'SIMPAN';
        return view('transaksi_form', $data);
    }
}
