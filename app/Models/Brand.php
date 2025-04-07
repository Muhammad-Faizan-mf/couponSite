<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['detail','name','image','category_id','slug','store_url','affiliate_url'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
