<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanPendidikan extends Model
{
    use HasFactory;

    protected $table = 'satuan_pendidikans';

    protected $fillable = [
        'satuan_pendidikan',
        'kepsek',
        'alamat',
        'kabkot_id',
        'admin_id'
    ];

    public $timestamps = true;

    public function kabupatenKotaSatuanPendidikan()
    {
        return $this->belongsTo(KabupatenKota::class, 'kabkot_id');
    }

    public function adminSatuanPendidikan()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
