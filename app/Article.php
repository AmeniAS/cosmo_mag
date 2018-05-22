<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image', 'article_content', 'views_count', 'blogger_id',
    ];

    public function blogger()
    {
        return $this->belongsTo(Blogger::class);
    }
}
