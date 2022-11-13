<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choixsociete extends Model
{
    use HasFactory;

    protected $table = "compte_hotel_pack";

    protected $fillable = [
        'comptesociete_id', 'pack_id', 'hotel_id', 'role_id', 'nombre', 'confirmation'
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

    /* public function hotelsa()
    {
        return $this->hasOne(hotel::class,  'hotel_name');
    } */

    
}
