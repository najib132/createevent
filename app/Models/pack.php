<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pack extends Model
{
    use HasFactory;


    protected $table = "pack";

    protected $fillable = [
        'addevents_id', 'num', 'type', 'checkIn', 'checkOut', 'nbTicketsRepas', 'contenu'
    ];


    public function addEvent()
    {
        return $this->belongsTo(addevent::class, 'addevents_id');
    }

    public function possibilite()
    {
        return $this->belongsTo(possibilite::class);
    }

    public function checkin()
    {
        return $this->belongsTo(choixsociete::class);
    }
}
