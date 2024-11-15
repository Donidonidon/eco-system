<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'nik',
        'email',
        'no_hp',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'ijasah_terakhir',
        'jabatan_sekarang',
        'tanggal_masuk',
        'foto_ktp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
