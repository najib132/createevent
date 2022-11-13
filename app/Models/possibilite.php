<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\addevent;

class possibilite extends Model
{
    use HasFactory;

    protected $table = "posibilite";

    protected $fillable = [
        'addevents_id', 'pack_id', 'role_id', 'hotel_id', 'plafond', 'mantant'
    ];

    public function addEvent()
    {
        return $this->hasOne(addevent::class, 'id', 'addevents_id');
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

    public function nombre()
    {
        return $this->hasOne(Choixsociete::class,  'pack_id');
    }

    public function comptesociete()
    {
        return $this->hasOne(societe::class, 'Nm_societe');
    }
    
    
    

    


}
