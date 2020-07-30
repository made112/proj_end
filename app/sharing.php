<?php

namespace App;
use App\Http\Requests\SharingRequest ;

use app\vote;
use Illuminate\Database\Eloquent\Model;

class sharing extends Model
{
    public $table = "sharing";
    protected $fillable = ['name','Prof_name', 'nationality', 'edu_area', 'edu_level', 'school','class','mobile','email','edu_share','sharing_type','photo','video','line','file','speak','line2'] ;
public $timestamps = false ;
public function sharing(){
    return $this -> belongsTo('App\vote','sharing_id','id');



}




}
