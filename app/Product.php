<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

    {protected $fillable = ["title","type","series","sale_date","description","price","image"];
}
