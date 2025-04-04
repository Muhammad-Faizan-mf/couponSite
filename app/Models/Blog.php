<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['detail','name','image','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
