<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonasiBencana extends Model
{
    protected $table = 'donasi_bencana';
    protected $primaryKey = 'donasi_id';

    protected $fillable = [
        'kejadian_id',
        'donatur_name',
        'jenis',
        'nilai'
    ];

    public function kejadian()
    {
        return $this->belongsTo(KejadianBencana::class, 'kejadian_id', 'kejadian_id')
            ->withDefault([
                'jenis_bencana' => 'Tidak ada data',
                'lokasi_text'   => '-'
            ]);
    }

    public function media()
    {
        return $this->hasMany(Media::class, 'ref_id')
            ->where('ref_table', 'donasi_bencana')
            ->orderBy('sort_order');
    }
}
