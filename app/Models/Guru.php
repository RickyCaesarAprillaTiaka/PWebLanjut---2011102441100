<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    protected $fillable = [
        'nama_lengkap_gr',
        'jenjang_pendidikan',
        'jenis_kelamin',
        'admin_id'
    ];

    public $timestamps = true;

    public function adminSatuanPendidikan()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function satuanPendidikanGuru()
    {
        return $this->belongsToMany(SatuanPendidikan::class, SpGuru::class, 'guru_id', 'sp_id')->withPivot('status_tugas');
    }
}
