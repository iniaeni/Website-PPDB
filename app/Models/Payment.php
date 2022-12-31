<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank',
        'bank_lainnya',
        'nama_pemilik',
        'nominal',
        'foto_bukti',
        'status',
        'user_id',
        
    ];

    public function user(){
        return $this->belongsTo(User::class,  'user_id');
    }
}
