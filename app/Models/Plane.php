<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    // public function user()
    // {
    //     return $this->hasMany(User::class);
    // }

    // public function subscribsion()
    // {
    //     return $this->belongsTo(Subscribe::class);
    // }

    public $timestamps = false;

}
