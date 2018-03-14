<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
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
