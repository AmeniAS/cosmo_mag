<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaVideo extends Model
{
    //

    protected $fillable = [
        'title', 'url','blogger_id'
    ];


    public function blogger()
    {

    	return $this->belongsTo(Blogger::class);

    }

}
