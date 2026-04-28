<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'external_link',
        'image',
        'author',
        'views'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
