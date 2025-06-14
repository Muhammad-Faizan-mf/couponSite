<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $fillable = [
        'name', 'detail', 'url','type','coupon_code','state','priority','startDate','endDate','brand_id','discount'
    ];

    public function brand()
{
    return $this->belongsTo(Brand::class);
}

}
