<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'description'
    ];

    public function article() {
        return $this->belongsToMany('App\Article', 'article_categories');
    }
}
