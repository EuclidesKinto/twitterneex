<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    use HasFactory;
    protected $fillable = ['tweet', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class)->where(function($q){
                    if(auth()->check()){
                        $q->where('user_id', Auth::user()->id);
                    }
                });
    }
    public function likesCount()
    {
        return $this->hasMany(Like::class);
    }
}
