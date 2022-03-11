<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable=['title','series','thumb','description','price','sale_date','type'];
}
