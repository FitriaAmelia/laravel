<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    public $table = "pembelians";
    protected $fillable = ['id_pembelian', 'nama_barang', 'nama_suplier', 'qty', 'tgl'];
}
