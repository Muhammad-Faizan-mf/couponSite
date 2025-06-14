<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name'];
    //
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category'); // 'category' is the foreign key in the blogs table
    }

    public function brands()
{
    return $this->hasMany(Brand::class);
}


}
