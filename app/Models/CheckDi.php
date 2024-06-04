<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckDi extends Model
{
    use HasFactory;

    protected $table = 'check_di';

    protected $guarded = 'id';

    public function di() : BelongsTo
    {
        return $this->belongsTo(CheckDi::class);
    }
}
