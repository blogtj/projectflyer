<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model {

    /**
     * fillable fields for a flyer
     */
    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'zip',
        'price',
        'description'
    ];

    public function scopeLocatedAt($query, $zip, $street)
    {
        $street = str_replace('-', ' ', $street);

        return $query->where(compact('zip', 'street'));
    }

    public function getPriceAttribute($price)
    {
        return '$' . number_format($price);
    }


    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
