<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'title', 'slug', 'weight', 'description', 'seo_title', 'seo_keywords', 'seo_description'
    ];
}
