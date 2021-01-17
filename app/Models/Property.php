<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function types(){
        return $this->belongsTo(Type::class);
    }
}
