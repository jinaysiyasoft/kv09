<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Branch extends Model
{

  use SoftDeletes;
  protected $table='branches';
  protected $fillable=['company_id','branch_name','state_id','city_id'];


}
