<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Carroussel extends Model
{    
    protected $fillable = ['user_id', 'title', 'slug', 'image', 'body'];
  
    use HasFactory;
    
    

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
    
}