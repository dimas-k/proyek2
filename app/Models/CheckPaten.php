<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CheckPaten extends Model
{
    use HasFactory;
    protected  $table = 'check_paten';

    protected $fillable = [
        'cek_data',
        'keterangan'
    ];

    public function paten() :BelongsTo
    {
        return $this->belongsTo(Paten::class);
    }
}
