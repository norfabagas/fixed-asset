<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * return has many assets
     */
    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
}