<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['price','location','surface','roomNumber','condition','constructionYear','description','type_id'];
    //protected $guarded = [];

    public function setTypeAttribute($value)
    {
        $this->attributes['type_id'] = $value;
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
