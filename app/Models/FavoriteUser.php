<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteUser extends Model
{
    /*

    MariaDB [laravel]> describe favorite_users;
+-------------+---------------------+------+-----+---------+----------------+
| Field       | Type                | Null | Key | Default | Extra          |
+-------------+---------------------+------+-----+---------+----------------+
| id          | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| favorite_id | bigint(20) unsigned | NO   | MUL | NULL    |                |
| user_id     | bigint(20) unsigned | NO   | MUL | NULL    |                |
| created_at  | timestamp           | YES  |     | NULL    |                |
| updated_at  | timestamp           | YES  |     | NULL    |                |
| deleted_at | timestamp           | YES  |     | NULL    |                |
+-------------+---------------------+------+-----+---------+----------------+
*/
    use HasFactory;
    use SoftDeletes;
    protected $table = "favorite_users";
    protected $guarded = [];
}
