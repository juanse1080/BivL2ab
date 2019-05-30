<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $primaryKey = 'pk_new';
    protected $table = 'news';
    protected $fillable = ['pk_new','title', 'photo', 'description'];
}
