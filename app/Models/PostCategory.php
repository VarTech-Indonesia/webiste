<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'status', 'author_id'];

    // Relationship to Post
    public function belongsToPost()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
