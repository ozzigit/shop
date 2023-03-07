<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
 /*

    MariaDB [laravel]> describe reviews;
+--------------+----------------------+------+-----+---------+----------------+
| Field        | Type                 | Null | Key | Default | Extra          |
+--------------+----------------------+------+-----+---------+----------------+
| id           | bigint(20) unsigned  | NO   | PRI | NULL    | auto_increment |
| product_id   | bigint(20) unsigned  | YES  | MUL | NULL    |                |
| rating       | smallint(5) unsigned | NO   |     | NULL    |                |
| is_published | tinyint(4)           | NO   |     | 0       |                |
| is_visible   | tinyint(4)           | NO   |     | NULL    |                |
| created_at   | timestamp            | YES  |     | NULL    |                |
| updated_at   | timestamp            | YES  |     | NULL    |                |
| deleted_at   | timestamp            | YES  |     | NULL    |                |
+--------------+----------------------+------+-----+---------+----------------+
*/

    use HasFactory;
    use SoftDeletes;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
