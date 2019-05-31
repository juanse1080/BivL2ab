<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'pk_project';
    protected $table = 'projects';
    protected $fillable = ['pk_project','type', 'title', 'photo', 'summary'];

    public function users(){
        return $this->belongsToMany('App\Usr');
    }

    public function sublines(){
        return $this->belongsToMany('App\SubLine');
    }
}
