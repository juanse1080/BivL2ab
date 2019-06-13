<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glaucoma extends Model
{
    protected $connection = 'mysql2';
    protected $primaryKey = 'usuarioDoctor';
    protected $table = 'DOCTORES';
    protected $fillable = ['nombreDoctor', 'usuarioDoctor', 'contrasenaDoctor'];
}
