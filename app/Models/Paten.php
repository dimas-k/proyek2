<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Paten extends Model
{
    use HasFactory;
    protected $searchable = [
        'nama_lengkap',
        'judul_paten'
    ];

    protected $guarded = 'id';
    protected $table = 'paten';

    public function cek() : HasOne
    {
        return $this->hasOne(CheckPaten::class);
    }

    public function jurusan() : HasMany
    {
        return $this->hasMany(Jurusan::class);
    }

    
}
