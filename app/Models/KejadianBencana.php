<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KejadianBencana extends Model
{
    protected $table = 'kejadian_bencana';
    protected $primaryKey = 'kejadian_id';

    protected $fillable = [
        'jenis_bencana',
        'tanggal',
        'lokasi_text',
        'rt',
        'rw',
        'dampak',
        'status_kejadian',
        'keterangan',
    ];

    public function donasi()
    {
        return $this->hasMany(DonasiBencana::class, 'kejadian_id', 'kejadian_id');
    }
}
