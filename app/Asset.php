<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'category_id',
        'depreciation_method',
        'name',
        'description',
        'buy_date',
        'usage_time',
        'asset_value',
        'final_value',
        'is_posted'
    ];

    /**
     * return belongs to Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * return has many depreciations
     */
    public function depreciations()
    {
        return $this->hasMany('App\Depreciation');
    }
}
