<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xolat extends Model
{
       protected $fillable = [
        'id',
        'xolat',
    ];
    protected $table = 'xolat';
    use HasFactory;
}
