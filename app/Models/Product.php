<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'short_description', 'description', 'image', 'price' ,'discount', 'gallery', 'add_to_home', 'position', 'category_id', 'user_id', 'is_on_sale', 'data'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Product Belongs to Many Ccategories
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all products where add_to_home is true.
     *
     * @return array
     */
    public static function homeProducts()
    {
        return self::where('add_to_home', true)->get();
    }
}
