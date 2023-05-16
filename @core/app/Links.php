<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';

    protected $fillable = [
        'title',
        'original_filename',
        'filename',
        'file_size',
        'url',
        'expired_at'
    ];

    public function LinkCategory()
    {
        return $this->belongsToMany('App\LinkCategory')->withTimestamps();
    }
}
