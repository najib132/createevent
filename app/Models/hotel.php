<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $table = "hotels";

    protected $fillable = [
        'addevents_id', 'hotel_name'
    ];

    //public $timestamps = false;

    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }

    public function possibilite()
    {
        return $this->belongsTo(possibilite::class);
    }
}
