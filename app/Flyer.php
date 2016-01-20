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

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
