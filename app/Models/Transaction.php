<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    /*
    MariaDB [laravel]> describe transactions;
+------------+---------------------+------+-----+---------+----------------+
| Field      | Type                | Null | Key | Default | Extra          |
+------------+---------------------+------+-----+---------+----------------+
| id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| order_id   | bigint(20) unsigned | NO   | MUL | NULL    |                |
| user_id    | bigint(20) unsigned | NO   | MUL | NULL    |                |
| code       | varchar(100)        | NO   |     | NULL    |                |
| type       | tinyint(4)          | NO   |     | 0       |                |
| mode       | tinyint(4)          | NO   |     | 0       |                |
| status     | tinyint(4)          | NO   |     | 0       |                |
| created_at | timestamp           | YES  |     | NULL    |                |
| updated_at | timestamp           | YES  |     | NULL    |                |
| deleted_at | timestamp           | YES  |     | NULL    |                |
+------------+---------------------+------+-----+---------+----------------+
*/
    use HasFactory;
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
