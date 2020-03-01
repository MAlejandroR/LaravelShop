<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //
    protected $table ="tienda";
    protected $primaryKey=["producto","tienda"];
    public $incrementing="false";

}
