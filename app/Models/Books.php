<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'carts');
    }
}
