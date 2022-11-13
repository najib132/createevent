<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atelier extends Model
{
    use HasFactory;

    protected $table = "ateliers";

    protected $fillable = [ 
         'addevents_id', 'name', 'mantant','role'
                 ];

    //public $timestamps = false;


    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }

}