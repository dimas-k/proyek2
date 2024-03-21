<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakCipta extends Model
{
    use HasFactory;
    protected $table = 'hak_cipta';
    protected $guarded = 'id';
}
