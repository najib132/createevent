<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addevent extends Model
{
    use HasFactory;


    protected $table = "addevents";

    protected $fillable = [
        'name', 'image_logo', 'image_slide', 'image_banier', 'programme', 'date_debut', 'date_fin', 'lieux', 'siteweb', 'perefix', 'deadline', 'affichage_deadline', 'Urlspon', 'Urlheberg'
    ];



    public function contenu()
    {
        return $this->hasMany('App\Models\Contenu', 'addevents_id');
    }

    public function pack()
    {
        return $this->hasMany('App\Models\pack', 'addevents_id');
    }

    public function role()
    {
        return $this->hasMany('App\Models\role', 'addevents_id');
    }

    public function hotel()
    {
        return $this->hasMany('App\Models\hotel', 'addevents_id');
    }

    public function possibilite()
    {
        return $this->belongsTo(possibilite::class);
    }

    public function sponsor()
    {
        return $this->hasMany('App\Models\sponsor', 'addevents_id');
    }

    public function atelier()
    {
        return $this->hasMany('App\Models\atelier', 'addevents_id');
    }

    public function major()
    {
        return $this->hasMany('App\Models\major', 'addevents_id');
    }
}
