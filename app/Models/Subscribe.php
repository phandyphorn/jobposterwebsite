<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function features()
    {
        return $this->belongsTo(Features::class);
    }

    protected $casts = [
        'feature' => 'array',
    ];
    public $timestamps = false;

}
