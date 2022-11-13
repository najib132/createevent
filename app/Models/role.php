<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $table = "role";

    protected $fillable = [
        'addevents_id', 'role'
    ];

    //public $timestamps = false;
    /*public function possibilite()
    {
        return $this->hasMany('App\Models\possibilite', 'role_id');

    }*/

    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }

    public function possibilite()
    {
        return $this->belongsTo(possibilite::class);
    }
}
