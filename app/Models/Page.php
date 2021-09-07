<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    public function sluggable(): array
    {
        return [
            'slug'  => ['source' => 'title']
        ];
    }

    // Relationship to Page Categories
    public function pageCategory()
    {
        return $this->hasOne('App\Models\PageCategory', 'id', 'id_page_category');
    }
    // Relationship to User
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_author');
    }
}
