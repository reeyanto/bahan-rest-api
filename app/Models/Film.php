<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $fillable = [
        'category_id',
        'title',
        'director',
        'release_year',
        'review',
        'link',
        'poster'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
