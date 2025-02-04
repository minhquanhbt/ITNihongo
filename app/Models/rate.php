<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    use HasFactory;
    public function Post()
    {
        return $this->belongsToMany(SharingPost::class, 'post_id');
    }
    public function User()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
    public function PostComment()
    {
        return $this->belongsToMany(PostComment::class, 'comment_id');
    }
}
