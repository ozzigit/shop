<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartProduct extends Model
{
    /*

    MariaDB [laravel]> describe cart_products;
+------------+----------------------+------+-----+---------+----------------+
| Field      | Type                 | Null | Key | Default | Extra          |
+------------+----------------------+------+-----+---------+----------------+
| id         | bigint(20) unsigned  | NO   | PRI | NULL    | auto_increment |
| quantity   | smallint(5) unsigned | NO   |     | 0       |                |
| cart_id    | bigint(20) unsigned  | NO   | MUL | NULL    |                |
| product_id | bigint(20) unsigned  | NO   | MUL | NULL    |                |
| created_at | timestamp            | YES  |     | NULL    |                |
| updated_at | timestamp            | YES  |     | NULL    |                |
+------------+----------------------+------+-----+---------+----------------+
*/
    use HasFactory;
    use SoftDeletes;
    protected $table = "cart_products";
    protected $guarded = [];
}
