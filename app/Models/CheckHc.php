<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckHc extends Model
{
    use HasFactory;
    protected $table = 'check_hc';

    protected $fillable = [
        'cek_data',
        'keterangan'
    ];

    public function hc() :BelongsTo
    {
        return $this->belongsTo(HakCipta::class);
    }
}
