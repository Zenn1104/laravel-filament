<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'name',
        'jurusan_id'
    ];

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }
}
