<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $primaryKey = 'warga_id';

    protected $fillable = [
        'no_ktp',
        'nama',
        'gender',
        'agama',
        'pekerjaan',
        'phone',
        'email'
    ];

    // 🚫 Tambahkan baris ini biar Laravel tidak menulis ke created_at dan updated_at
    public $timestamps = false;
}
