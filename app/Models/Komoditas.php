<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    use HasFactory;

    protected $table = 'tb_komoditas';
    protected $primaryKey = 'id';
    public $timestamps = false; // karena memakai created_on, updated_on

    protected $fillable = [
        'id_produksi',
        'tanggal_type',
        't_komoditas_kode',
        'produksi',
        'created_on',
        'created_by',
        'updated_on',
        'updated_by',
    ];
}
