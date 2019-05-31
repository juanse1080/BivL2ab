<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'pk_project';
    protected $table = 'projects';
    protected $fillable = ['pk_project', 'type', 'title', 'photo', 'summary'];

    public function users(){
        return $this->belongsToMany('App\Usr', 'project_usr', 'pk_project',	'pk_usr');
    }

    public function sublines(){
        return $this->belongsToMany('App\SubLine', 'project_sublines', 'pk_project', 'pk_subline');
    }
}
