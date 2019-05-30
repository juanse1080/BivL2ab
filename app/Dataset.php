<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    protected $primaryKey = 'pk_dataset';
    protected $table = 'datasets';
    protected $fillable = ['pk_dataset','name', 'description', 'url'];
}
