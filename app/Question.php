<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question',
        'author',
        'email_author',
        'category_id',
        'status',
        'answer',
        'date_created',
        'date_updated',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function answers()
    {
        return $this->hasMany('App\Question');
    }
}
