<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthdate', 'phone', 'address', 'image', 'points', 'code', 'referer_code', 'referer_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function feedbacks()
    {
        return $this->morphMany(Feedback::class, 'feedbackable');
    }

    public function product_favorites()
    {
        return $this->morphMany(FavoriteProduct::class, 'product_favoritable');
    }

    public function brand_favorites()
    {
        return $this->morphMany(FavoriteBrand::class, 'brand_favoritable');
    }

    public function hasVavoriteProduct($product_id)
    {
        return in_array($product_id, $this->product_favorites->pluck('product_id')->toArray()) ? true : false;
    }

    public function hasVavoriteBrand($brand_id)
    {
        return in_array($brand_id, $this->brand_favorites->pluck('brand_id')->toArray()) ? true : false;
    }
}
