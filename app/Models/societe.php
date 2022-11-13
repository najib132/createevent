<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class societe extends Model
{
    use HasFactory;

    protected $table = "comptesociete";

    protected $fillable = [ 
        'addevents_id', 'nom', 'prenom', 'gsm', 'email', 'password', 'Nm_societe', 'ice','adressePh', 'responssable', 
        'game', 'service'
                    ];

    public function addEvent()
    {
        return $this->belongsTo('App\Models\addevent', 'addevents_id');
    }

    public function pack()
    {
        return $this->hasOne(pack::class, 'id', 'pack_id');
    }

    public function role()
    {
        return $this->hasOne(role::class, 'id', 'role_id');
    }

    public function hotel()
    {
        return $this->hasOne(hotel::class,  'id', 'hotel_id');
    }

    public function choixsociete()
    {
        return $this->hasOne('App\Models\choixsociete', 'comptesociete_id');
    }

    public function nombre()
    {
        return $this->belongsTo('App\Models\choixsociete', 'nombre');
    }
    
}
