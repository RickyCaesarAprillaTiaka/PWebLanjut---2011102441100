<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;

    protected $table = 'rombels';

    protected $fillable = [
        'nama_rombel',
        'wali_kelas',
        'admin_id'
    ];

    public $timestamps = true;

    public function adminSatuanPendidikan()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function waliKelas()
    {
        return $this->belongsTo(Guru::class, 'wali_kelas');
    }
}
