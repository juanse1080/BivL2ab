<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usr extends Authenticatable
{
    use SoftDeletes;
    protected $primaryKey = 'pk_usr';
    protected $table = 'usrs';
    protected $fillable = ['pk_usr','first_name', 'last_name', 'email', 'birthdate', 'password', 'role', 'photo', 'biography'];
    protected $dates = ['deleted_at'];
    
    public function session(){
        return $this->attributes;
    }

    public function projects(){
        return $this->belongsToMany('App\Project', 'project_usr', 'pk_usr', 'pk_project');
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
        return $this->education()->orderBy('start', 'DESC')->limit(1)->get();
    }

    public function birthdateString(){
        return strftime("%B %d, %Y",strtotime($this->birthdate));
    }

    public function shortName(){
        return explode(' ', $this->first_name)[0] .' '. explode(' ', $this->last_name)[0];
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
                if (!array_key_exists('others', $result)){
                    $result['others'] = [$usr];
                } else {
                    array_push($result['others'], $usr);
                }
            }
        }
        return $result;
    }

}
