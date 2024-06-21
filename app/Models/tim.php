<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tim';
    protected $primaryKey = 'id_tim';
    protected $fillable = [
        'Nama_tim',
        'guru_pembimbing',
        'asal_sekolah',
        'NoHp',
       
    ];
}
