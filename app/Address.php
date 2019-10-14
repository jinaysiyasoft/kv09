<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    protected $table="";
    protected $fillable=['user_id','fname', 'lname','companyname','country','address','address1','city_id','state_id','pincode','addresstype_id'];
    protected $hidden=[];

}
