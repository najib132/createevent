<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsor extends Model
{
    use HasFactory;

    protected $table = "sponsors";

    protected $fillable = [ 
        'addevents_id', 'sponsoring', 'designation', 'prix'
                    ];

    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }
}
