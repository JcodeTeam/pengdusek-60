<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    use HasFactory;

    protected $table = 'input_aspirasis';

    protected $fillable = [
        'nisn',
        'judul',
        'kategori_id',
        'foto',
        'lokasi',
        'status',
        'ket',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn', 'nisn');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class, 'input_aspirasi_id');
    }
}
