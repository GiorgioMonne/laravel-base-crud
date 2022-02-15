<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

    {protected $filable = ["title","type","series","sale_date","description","price","image"];
}
