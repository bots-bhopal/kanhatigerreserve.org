<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkCategory extends Model
{
    protected $table = 'linkcategories';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function links()
    {
        return $this->belongsToMany('App\Links')->withTimestamps();
    }
}
