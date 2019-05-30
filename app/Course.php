<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'pk_course';
    protected $table = 'courses';
    protected $fillable = ['pk_course','name','description', 'url'];
}
