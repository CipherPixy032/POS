<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Sesuaikan dengan nama tabel

    protected $primaryKey = 'user_id'; // Pastikan sesuai dengan Primary Key

    //public $timestamps = false; // Matikan timestamps jika tidak digunakan

    protected $fillable = ['username', 'nama', 'password', 'level_id'];

    public function level(): BelongsTo {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

}
