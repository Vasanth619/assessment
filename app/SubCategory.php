<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['parent_category_id', 'user_id', 'name', 'status']; 
}
