<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    //
    protected $fillable = [
        'nip',
        'input_aspirasi_id',
        'deskripsi',
        'foto',
        'status',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'nip', 'nip');
    }

    public function inputAspirasi()
    {
        return $this->belongsTo(InputAspirasi::class, 'input_aspirasi_id');
    }
}
