<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistribusiLogistik extends Model
{
    use HasFactory;

    protected $table = 'distribusi_logistik';
    protected $primaryKey = 'distribusi_id';

    protected $fillable = [
        'logistik_id',
        'posko_id',
        'tanggal',
        'jumlah',
        'penerima',
        'bukti_distribusi'
    ];

    // Relasi
    public function logistik()
    {
        return $this->belongsTo(Logistik::class, 'logistik_id');
    }

    public function posko()
    {
        return $this->belongsTo(PoskoBencana::class, 'posko_id');
    }
}
