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
}
