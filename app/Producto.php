<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table ="producto";
    protected $primaryKey="cod";
    public $incrementing=false;
    protected $keyType="string";

    public $timestamps = false;

}
