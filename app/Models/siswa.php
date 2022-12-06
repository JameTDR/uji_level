<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table ='siswa';

    protected $fillable=[
        'nama',
        'nisn',
        'jeniskelamin',
        'nohp',
        'email',
        'kelas_id',
        'jurusan_id',
        'guru_id',
    ];

}
