<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DesainIndustri extends Model
{
    use HasFactory;
    protected $table = 'desain_industri';
    protected $guarded = 'id';

    public function cekDi() : HasOne
    {
        return $this->hasOne(CheckDi::class);
    }
}
