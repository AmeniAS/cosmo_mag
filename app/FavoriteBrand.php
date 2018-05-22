<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteBrand extends Model
{
    public function brand_favoritable()
    {
        return $this->morphTo();
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
