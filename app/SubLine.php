<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubLine extends Model
{
    protected $primaryKey = 'pk_subline';
    protected $table = 'sublines';
    protected $fillable = ['pk_subline','name', 'description', 'fk_line'];
}
