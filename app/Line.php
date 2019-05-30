<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    protected $primaryKey = 'pk_line';
    protected $table = 'lines';
    protected $fillable = ['pk_line','name', 'description'];

    public function sublines(){
        return $this->hasMany('App\SubLine', 'fk_line','pk_line');
    }
}

