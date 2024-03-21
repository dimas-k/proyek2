<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paten extends Model
{
    use HasFactory;
    protected $searchable = [
        'nama_lengkap',
        'judul_paten'
    ];

    protected $guarded = 'id';
    protected $table = 'paten';
}
