<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'comment',
        'feedbackable_id',
        'feedbackable_type'
    ];

    public function feedbackable()
    {
        return $this->morphTo();
    }
}
