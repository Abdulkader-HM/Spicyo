<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_user extends Model
{
    use HasFactory;
    protected $table = "food_user";
    protected $fillable = ['user_id', 'food_id','status'];
}
