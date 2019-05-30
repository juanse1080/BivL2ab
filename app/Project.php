<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'pk_project';
    protected $table = 'projects';
    protected $fillable = ['pk_project','type', 'title', 'photo', 'summary'];
}
