<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    use HasFactory;

    protected $table = "majors";

    protected $fillable = [ 
         'addevents_id', 'pourcentage'
                    ];

    //public $timestamps = false;


    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }
}
