<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contenu extends Model
{
    use HasFactory;


    protected $table = "contenus";

    protected $fillable = [ 
        'contenu', 'addevents_id'
                    ];

    //public $timestamps = false;

    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }
    
}
