<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restorePost extends Model
{
    use HasFactory;

    public function sub()
    {
        return $this->hasMany(Subscribe::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public $timestamps = false;

}
