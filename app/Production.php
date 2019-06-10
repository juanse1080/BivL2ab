<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $primaryKey = 'pk_production';
    protected $table = 'productions';
    protected $fillable = ['pk_production','type', 'title', 'photo', 'abstract', 'pdf', 'code', 'ext_author', 'fk_project'];

    public function projects(){
        return $this->belongsToMany('App\Project');
    }

    public function datasets(){
        return $this->belongsToMany('App\Dataset', "production_dataset", "pk_production", "pk_dataset");
    }

    public function usrs(){
        return $this->belongsToMany('App\Usr', 'production_usr', 'pk_production', 'pk_usr');
    }

    public function sublines(){
        return $this->belongsToMany('App\SubLine', 'production_sublines', 'pk_production', 'pk_subline');
    }
}
