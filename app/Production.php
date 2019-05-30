<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $primaryKey = 'pk_production';
    protected $table = 'productions';
    protected $fillable = ['pk_production','type', 'title','photo', 'abstract', 'pdf'];

    public function resources(){
        return $this->hasMany('App\Resource', 'fk_production', 'pk_production');
    }
}
