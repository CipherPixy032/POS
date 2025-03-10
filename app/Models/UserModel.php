<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Sesuaikan dengan nama tabel

    protected $primaryKey = 'user_id'; // Pastikan sesuai dengan Primary Key

    //public $timestamps = false; // Matikan timestamps jika tidak digunakan

    protected $fillable = ['username', 'nama', 'password', 'level_id'];

}
