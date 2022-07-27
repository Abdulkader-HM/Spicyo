<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_name', 'address', 'city', 'postcode', 'meal_name', 'meal_price', 'qty', 'tax', 'discount', 'total', 'user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
