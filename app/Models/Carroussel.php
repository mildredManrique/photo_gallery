<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Carroussel extends Model
{    
    protected $fillable = ['user_id', 'title', 'image', 'body'];
  
    use HasFactory;   

    public function getGetImageAttribute()
    {
        if($this->image)
        return url("storage/$this->image");
    }
    
}