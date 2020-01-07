<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'short_description', 'image','text' ,'link', 'user_id'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
