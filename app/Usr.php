<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usr extends Authenticatable
{
    protected $primaryKey = 'pk_usr';
    protected $table = 'usrs';
    protected $fillable = ['pk_usr','first_name', 'last_name', 'birthdate', 'email', 'password', 'role', 'photo', 'biography'];
    
    public function session(){
        return $this->attributes;
    }

    public function projects(){
        return $this->belongsToMany('App\Project', 'project_usr', 'pk_project',	'pk_usr');
    }

    public function education(){
        return $this->hasMany('App\Education', 'fk_usr', 'pk_usr');
    }

    public function group($param){
        $aux = [];
        foreach($this->$param as $item){
            if(!in_array($item->type, $aux)){
                array_push($aux, $item->type);
            }
        }
        return $aux;
    }

    public function birthdateString(){
        setlocale(LC_TIME, 'es_ES.UTF-8');
        return strftime("%d de %B del %Y",strtotime($this->birthdate));
    }

}
