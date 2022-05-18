<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     *  category that belong product
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
