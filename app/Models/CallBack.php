<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallBack extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
