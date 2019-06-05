<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usr extends Authenticatable
{
    protected $primaryKey = 'pk_usr';
    protected $table = 'usrs';
    protected $fillable = ['pk_usr','first_name', 'last_name', 'email', 'birthdate', 'password', 'role'];
    
    public function session(){
        return $this->attributes;
    }

    public function projects(){
        return $this->belongsToMany('App\Project', 'project_usr', 'pk_project',	'pk_usr');
    }

    public function productions(){
        return $this->belongsToMany('App\Production', 'production_usr', 'pk_usr', 'pk_production' );
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

    public function educationActual(){
        return $this->education()->orderBy('start', 'ASC')->limit(1)->get();
    }

    public function birthdateString(){
        return strftime("%B %d, %Y",strtotime($this->birthdate));
    }

    public static function educationGroup(){
        $result = [];
        foreach(Usr::all() as $usr){
            if (!is_null($usr->educationActual()->first()['type'])){
                if (!array_key_exists($usr->educationActual()->first()['type'], $result)){
                    $result[$usr->educationActual()->first()['type']] = [$usr];
                } else {
                    array_push(
                        $result[
                            is_null($usr->educationActual()->first()['type']) 
                                ? 'others' 
                                : $usr->educationActual()->first()['type']
                        ], $usr
                    );
                }
            } else {
                $result['others'] = [];
            }
        }
        return $result;
    }

}
