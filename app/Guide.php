<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable= ['uid','name','email','subject','section','sem'];
}
