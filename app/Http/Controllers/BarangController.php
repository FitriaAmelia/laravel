<?php

namespace App\Http\Controllers;

use \App\Models\Barang;
use \App\Models\Pembeli;
use \App\Models\Pembelian;
use \App\Models\Pesanan;
use \App\Models\Suplier;

class BarangController extends Controller
{
    public function barangs()
    {
        $barang = Barang::all();
        return view('test-barangs', compact('barang'));
    }
    public function pesanans()
    {
        $pesanan = Pesanan::all();
        return view('test-pesanan', compact('pesanan'));
    }

    public function pembelians()
    {
        $pembelian = Pembelian::all();
        return view('test-pembelian', compact('pembelian'));
    }

    public function pembelis()
    {
        $pembeli = Pembeli::all();
        return view('test-pembeli', compact('pembeli'));
    }

    public function suplier()
    {
        $suplier = Suplier::all();
        return view('test-suplier', compact('suplier'));
    }
}
