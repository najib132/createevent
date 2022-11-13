<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indiv extends Model
{
    use HasFactory;

    protected $table = "compteindiv";

    protected $fillable = [ 
        'addevents_id', 'nom', 'prenom', 'gsm', 'email', 'password'
                    ];

    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }
}
