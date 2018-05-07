<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question',
        'category_id',
        'author',
        'email_author',
        'status',
        'answer',
        'date_created',
        'date_updated',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
