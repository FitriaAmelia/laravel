<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    public $table = "barangs";
    protected $fillable = ['id_barang', 'nama', 'varian', 'harga_beli', 'harga_jual'];

}
