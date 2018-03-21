<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaImage extends Model
{
    protected $fillable = [
        'title',
        'path',
        'description',
        'blogger_id'
    ];

    public function blogger()
    {
        return $this->belongsTo(Blogger::class);
    }
}
