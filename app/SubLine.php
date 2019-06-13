<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubLine extends Model
{
    protected $primaryKey = 'pk_subline';
    protected $table = 'sublines';
    protected $fillable = ['pk_subline','name', 'description', 'fk_line'];

    public function projects(){
        return $this->hasMany('App\Project', 'project_sublines', 'pk_project', 'pk_subline');
    }

    public function productions(){
        return $this->belongsToMany('App\Production', 'production_sublines', 'pk_production', 'pk_subline');
    }
}
