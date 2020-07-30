<?php

namespace App;
use\app\sharing;

use Illuminate\Database\Eloquent\Model;


class vote extends Model
{
    public $table = "vote";

    protected $fillable = ['name', 'email', 'sharing_id', 'avg_percent'];


    public $timestamps = false;

    public function vote()
    {
        return $this->hasMany('App\sharing', 'sharing_id','id');


    }
}

