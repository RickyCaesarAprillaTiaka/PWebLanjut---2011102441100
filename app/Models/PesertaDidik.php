<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaDidik extends Model
{
    use HasFactory;

    protected $table = 'peserta_didiks';

    protected $fillable = [
        'nama_pd',
        'kelas',
        'rombel_id',
        'sp_id'
    ];

    public $timestamps = true;

    public function rombelPesertaDidik()
    {
        return $this->belongsTo(Rombel::class, 'rombel_id');
    }
}
