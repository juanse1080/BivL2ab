<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $primaryKey = 'pk_resource';
    protected $table = 'resources';
    protected $fillable = ['pk_resource','code', 'introduction', 'fk_production'];

    public function datasets(){
        return $this->belongsToMany('App\Dataset');
    }
}
