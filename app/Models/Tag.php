<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
