<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogistikBencana extends Model
{
    use HasFactory;

    /**
     * Nama tabel
     */
    protected $table = 'logistik_bencana';

    /**
     * Primary key tabel
     */
    protected $primaryKey = 'logistik_id';

    /**
     * Izinkan mass assignment
     */
    protected $fillable = [
        'kejadian_id',
        'nama_barang',
        'satuan',
        'stok',
        'sumber',
    ];

    /**
     * Relasi ke tabel kejadian_bencana
     */
    public function kejadianBencana()
    {
        return $this->belongsTo(
            KejadianBencana::class,
            'kejadian_id',
            'kejadian_id'
        );
    }
}
