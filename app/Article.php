<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'body'
    ];

    public function category() {
        return $this->belongsToMany('App\Category', 'article_categories');
    }
}
