<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /*
    MariaDB [laravel]> describe users;
+-------------------+---------------------+------+-----+---------+----------------+
| Field             | Type                | Null | Key | Default | Extra          |
+-------------------+---------------------+------+-----+---------+----------------+
| id                | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| name              | varchar(255)        | NO   |     | NULL    |                |
| email             | varchar(255)        | NO   | UNI | NULL    |                |
| email_verified_at | timestamp           | YES  |     | NULL    |                |
| password          | varchar(255)        | NO   |     | NULL    |                |
| remember_token    | varchar(100)        | YES  |     | NULL    |                |
| created_at        | timestamp           | YES  |     | NULL    |                |
| updated_at        | timestamp           | YES  |     | NULL    |                |
| first_name        | varchar(255)        | YES  |     | NULL    |                |
| middle_name       | varchar(255)        | YES  |     | NULL    |                |
| last_name         | varchar(255)        | YES  |     | NULL    |                |
| mobile            | varchar(255)        | YES  |     | NULL    |                |
| adress            | varchar(255)        | YES  |     | NULL    |                |
| is_blocked        | tinyint(4)          | NO   |     | 0       |                |
| last_login        | datetime            | YES  |     | NULL    |                |
| deleted_at | timestamp           | YES  |     | NULL    |                |
+-------------------+---------------------+------+-----+---------+----------------+
*/
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["name", "email", "password"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function favorites()
    {
        return $this->belongsToMany(Favorite::class, "favorite_users");
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function user()
    {
        return $this->hasOne(Cart::class);
    }
}
