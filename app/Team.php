<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable= ['uid','name1','usn1','name2','usn2','subject','sem','section','topic'];
    public static function tp($sub,$sec)
    {
      $c=Team::where('subject',$sub)->where('section',$sec)->count();
      return $c;
    }
    public static function ttp()
    {
      $c=Team::all()->count();
      return $c;
    }
}
