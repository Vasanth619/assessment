<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = ['test_name', 'category', 'sub_category', 'instruction', 'total_question', 'difficult_level', 'total_mark', 'duration', 'question_mandetory', 'allow_movement', 'pass_feedback', 'fail_feedback', 'submit_message', 'markin_percentage'];
}
