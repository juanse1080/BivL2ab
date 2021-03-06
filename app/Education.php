<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $primaryKey = 'pk_education';
    protected $table = 'education';
    protected $fillable = ['pk_education','school', 'title','start', 'end', 'fk_usr', 'type'];

    public function usr()
    {
        return $this->belongsTo('App\Usr');
    }

    public function dateString($param){
        if($this->$param != null) {
            return strftime("%B %d, %Y",strtotime($this->$param));
        }
    }
}
