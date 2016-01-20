<?php

namespace App;
use App\Photo;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

protected  $fillable = [

    'street',
    'city',
    'state',
    'country',
    'description',
    'price',
    'zip'


];

    public function scopeLocatedAt($query,$zip, $street)
    {
        $street = str_replace('-', '',$street);
        return $query->where(compact('zip','street'));
    }

    public function getPriceAttribute($price)
    {
        return '$'.number_format($price);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
