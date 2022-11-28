<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpGuru extends Model
{
    use HasFactory;

    protected $table = 'sp_gurus';

    protected $fillable = [
        'guru_id',
        'sp_id',
        'status_tugas'
    ];

    public $timestamps = false;
}
