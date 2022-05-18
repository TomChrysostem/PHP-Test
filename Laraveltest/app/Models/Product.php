<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * product that belong category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
