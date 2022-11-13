<?php

namespace App\Http\Controllers;

use App\Models\hebergement;
use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\societe;
use App\Models\possibilite;
use App\Models\role;
use App\Models\pack;
use App\Models\hotel;
use App\Models\choixsociete;

class HebergementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        /* $event = addevent::where('id', $id)->first();
        return view('hebergementadmin')->with(
            'event',
            $event
        ); */

        $possibilites = possibilite::where('addevents_id', $id)->with('pack')->with('hotel')->with('addEvent')->with('role')->with('nombre')->get();
        $event = addevent::whereId($id)->first();
        $role = role::where('addevents_id', $id)->get();
        $pack = pack::where('addevents_id', $id)->get();
        $hotel = hotel::where('addevents_id', $id)->get();
        $societe = societe::where('addevents_id', $id)->get();
        return view('hebergementadmin')->with(['societe' => $societe, 'possibilites' => $possibilites, 'event' => $event, 'pack' => $pack, "role" => $role, "hotel" => $hotel]);
  
    }

    /* public function store(Request $request)
    {
        //$eventId = $request['eventId'];

        
            $confirmation[] = [
                'confirmation' => $request->confirmation,
                //'event_id' => $eventId,
            ];
         
        choixsociete::insert($confirmation);
       // dd($confirmation);
    } */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function show(hebergement $hebergement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function edit(hebergement $hebergement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hebergement $hebergement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hebergement  $hebergement
     * @return \Illuminate\Http\Response
     */
    public function destroy(hebergement $hebergement)
    {
        //
    }
}
