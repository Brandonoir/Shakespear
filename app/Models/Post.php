<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['postTitle', 'postContent', 'user_id'];

    //database relation ship to the user using user_id
    //to access element/s from the users database
    public function publisher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
