<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, "categories_products");
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, "order_products");
    }
    public function carts()
    {
        return $this->belongsToMany(Cart::class, "cart_product");
    }
}
