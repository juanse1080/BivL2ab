<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    protected $primaryKey = 'pk_dataset';
    protected $table = 'datasets';
    protected $fillable = ['pk_dataset','name', 'description', 'url'];

    public function productions(){
        return $this->belongsToMany('App\Production', "production_dataset", "pk_production", "pk_dataset");
    }
}
