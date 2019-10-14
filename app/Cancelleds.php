<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cancelleds extends Model
{
    use SoftDeletes;
    protected $table='cancelleds';
}
