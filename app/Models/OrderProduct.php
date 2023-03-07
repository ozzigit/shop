<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /*
    MariaDB [laravel]> describe order_products;
+------------+----------------------+------+-----+---------+----------------+
| Field      | Type                 | Null | Key | Default | Extra          |
+------------+----------------------+------+-----+---------+----------------+
| id         | bigint(20) unsigned  | NO   | PRI | NULL    | auto_increment |
| quantity   | smallint(5) unsigned | NO   |     | 0       |                |
| order_id   | bigint(20) unsigned  | NO   | MUL | NULL    |                |
| product_id | bigint(20) unsigned  | NO   | MUL | NULL    |                |
| created_at | timestamp            | YES  |     | NULL    |                |
| updated_at | timestamp            | YES  |     | NULL    |                |
+------------+----------------------+------+-----+---------+----------------+
*/
    use HasFactory;
}
