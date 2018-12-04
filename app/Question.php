<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'category', 'sub_category', 'status', 'choice', 'answer'];
}
