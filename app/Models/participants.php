<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    use HasFactory;

    protected $table = "participants";

    protected $fillable = [
        'comptesociete_id', 'pack_id', 'hotel_id', 'event_id', 'role_id', 'nom', 'prenom',
        'cin','mail', 'gsm', 'ville', 'index_badge', 'etat', 'check_in', 'check_out', 'type_chambre', 'accompagnant',
        'codebare', 'nb_ticketsrepas', 'atelier_id'
    ];

    public function pack()
    {
        return $this->hasOne(pack::class, 'id', 'pack_id');
    }
    public function hotel()
    {
        return $this->hasOne(hotel::class, 'id', 'hotel_id');
    }

    public function comptesociete()
    {
        return $this->hasOne(societe::class, 'id', 'comptesociete_id');
    }

    public function role()
    {
        return $this->hasOne(role::class, 'id', 'role_id');
    }

}
