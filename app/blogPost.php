<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogPost extends Model
{
    // protected $table = 'blogposts';
    protected $fillable = ['title','content'];
}
