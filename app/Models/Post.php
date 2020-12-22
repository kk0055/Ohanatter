<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        
    ];

    //該当のユーザーにLikeされているかどうかを判定
    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
    
    public function ownedBy(User $user)
    {
        return $user->id === $this->user_id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }




}
