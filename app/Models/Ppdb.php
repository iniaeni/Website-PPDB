<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'jenis_kelamin',
        'nama',
        'asal_sekolah',
        'sekolah_lainnya',
        'email',
        'no_hp',
        'no_ayah',
        'no_ibu',
        'refrensi',
        'nama_pegawai',
        'nama_siswa',
        'rayon',
        'nama_alumni',
        'tahun_lulus',
        'nama_guru',
        'asal_smp',
        'no_seleksi',
        'nama_calon',
    ];
}
