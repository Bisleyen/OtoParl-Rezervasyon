<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class,'user_id','id');
    }
}
