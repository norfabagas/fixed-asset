<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depreciation extends Model
{
    protected $fillable = [
        'asset_id',
        'depreciation_value'
    ];

    /**
     * return belongs to App\Asset
     */
    public function asset()
    {
        return $this->belongsTo('App\Asset');
    }
}
