<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relationship to Post Categories
    public function PostCategory()
    {
        return $this->hasOne('App\Models\PostCategory', 'id', 'id_post_category');
    }
    // Relationship to User
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_author');
    }
}
