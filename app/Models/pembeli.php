<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    public $table = "pembelis";
    protected $fillable = ['id_pembeli', 'nama', 'jns_kelamin', 'alamat', 'kode_pos', 'kota', 'tgl_lahir'];
}
