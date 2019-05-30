<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usr extends Model
{
    protected $primaryKey = 'pk_usr';
    protected $table = 'usrs';
    protected $fillable = ['pk_usr','first_name', 'last_name', 'birthdate', 'email', 'password', 'role', 'photo', 'biography'];
}
