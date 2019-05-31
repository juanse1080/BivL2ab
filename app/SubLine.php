<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubLine extends Model
{
    protected $primaryKey = 'pk_subline';
    protected $table = 'sublines';
    protected $fillable = ['pk_subline','name', 'description', 'fk_line'];

    public function productions(){
        return $this->hasMany('App\Production', 'fk_subline', 'pk_subline');
    }

    public function projects(){
        return $this->belongsToMany('App\Project');
    }
}
