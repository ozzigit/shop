<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /*
    MariaDB [laravel]> describe products;
+------------+---------------------+------+-----+---------+----------------+
| Field      | Type                | Null | Key | Default | Extra          |
+------------+---------------------+------+-----+---------+----------------+
| id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| title      | varchar(75)         | NO   |     | NULL    |                |
| slug       | varchar(100)        | NO   | UNI | NULL    |                |
| type       | tinyint(4)          | NO   |     | 0       |                |
| price      | decimal(8,2)        | NO   |     | 0.00    |                |
| in_sale    | tinyint(4)          | NO   |     | 0       |                |
| content    | text                | YES  |     | NULL    |                |
| created_at | timestamp           | YES  |     | NULL    |                |
| updated_at | timestamp           | YES  |     | NULL    |                |
| deleted_at | timestamp           | YES  |     | NULL    |                |
+------------+---------------------+------+-----+---------+----------------+
*/
    use HasFactory;
    use SoftDeletes;
    protected $table = "products";
    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
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
