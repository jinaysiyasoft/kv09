<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BulkOrder extends Model
{
   use SoftDeletes;
   protected $table='bulk_orders';
   protected $fillable=[];
}
