<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];

    public function question()
    {
        return $this->hasMany('App\Question');
    }
}
