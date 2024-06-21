<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaturan extends Model
{
    use HasFactory;
    protected $table =  'pengaturan';
    protected $primaryKey = 'id_pengaturan';
    protected $fillable = [
        'status_pendaftaran_ditutup',
        'status_upload_postervideo_ditutup',
    ];
    public $timestamps = false;
}
