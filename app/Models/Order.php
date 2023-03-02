<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'shtrix',
        'xolat',
        'created_at',
        'updated_at',
    ];
    protected $table = 'order';
    public function xolat()
    {
        return $this->belongsToMany(xolat::class);
    }
}
