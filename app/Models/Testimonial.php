<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relationship to User
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_author');
    }
}
