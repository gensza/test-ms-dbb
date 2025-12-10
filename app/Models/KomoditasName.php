<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomoditasName extends Model
{
    use HasFactory;

    protected $table = 'tb_komoditas_name';
    protected $primaryKey = 'komoditas_kode';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'komoditas_kode',
        'komoditas_name',
        'created_on',
        'created_by',
        'updated_on',
        'updated_by'
    ];
}
