<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sickness extends Model
{
    //
    protected $fillable = [
        'sickness_id',
        'comment',

            ];
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
