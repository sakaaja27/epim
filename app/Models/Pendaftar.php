<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table =  'pendaftar';
    protected $primaryKey = 'id_pendaftar';
    protected $fillable = [
        'id_lomba',
        'id_subkategori',
        'id_tim',
        'id_user',
        'status_lolos',
        'proposal',
        'upload_bayar',
        'status_verifikasi_pembayaran',
        'updated_at', 
        'created_at',
        'upload_bukti_submit_ig',
    ];
}