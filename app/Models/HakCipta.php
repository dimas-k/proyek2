<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HakCipta extends Model
{
    use HasFactory;
    protected $table = 'hak_cipta';
    protected $guarded = 'id';

    public function cekhc() :HasOne
    {
        return $this->hasOne(CheckHc::class);
    }
}
