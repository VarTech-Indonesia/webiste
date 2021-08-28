<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'status', 'author_id'];

    // Relationship to Page
    public function belongsToPage()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
