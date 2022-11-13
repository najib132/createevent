<?php

namespace App\Http\Controllers;

use App\Models\choixsociete;
use Illuminate\Http\Request;

use App\Models\addevent;
use App\Models\possibilite;
use App\Models\role;
use App\Models\pack;
use App\Models\hotel;
use App\Models\societe;
use App\Models\participants;
use Illuminate\Support\Facades\DB;


class ChoixsocieteController extends Controller
{
    

    public function dashboardconfirmer(Request $request, $societeId, $eventId)
    {   
        //$possibilites = possibilite::where('addevents_id', $eventId)->with('pack')->with('hotel')->with('addEvent')->with('role')->with('nombre')->get();
        $societe = societe::where('addevents_id', $societeId)->get();
        $choixsociete = Choixsociete::where('comptesociete_id', $societeId)->with('pack')->with('hotel')->with('role')->with('comptesociete')->get();
        //$hotel = hotel::where('hotel', $eventId)->get();
        $event = addevent::whereId($eventId)->first();
        $participants = participants::where('comptesociete_id', $societeId)->with('pack')->with('hotel')->with('role')->with('comptesociete')->get();
        //dd($choixsociete);
        // get participants
        return view('userBundel/choixconfirmer')->with(['participants'=>$participants,'choixsociete' => $choixsociete, 'societe' => $societe,  'event' => $event]);
    }

    public function participantInscri(Request $request)
    {

       
        $codebare = participants::select('codebare')->orderByRaw('id')->get();
        foreach ($codebare as $codebares) {
            if ( $codebare = $request->input('codebare')) {
                # code...
                $codebares->codebare++;
            }
            
        }
       
       //dd($codebare);
        
        $checkIn = Choixsociete::where('pack_id', '=', $request->input('pack_id'))->get();
        foreach ($checkIn as $checkIns) {
        if ($checkIn = $request->input('pack_id')) {
            # code...
            $checkIns->pack->type;
            $checkIns->pack->checkIn;
            $checkIns->pack->nbTicketsRepas;
        }
    }

    
        
        
        $participant = new participants();
        $participant->comptesociete_id = $request->input('comptesociete_id');
        $participant->event_id = $request->input('event_id');
        $participant->nom = $request->input('nom');
        $participant->prenom = $request->input('prenom');
        $participant->mail = $request->input('mail');
        $participant->cin = $request->input('cin');
        $participant->gsm = $request->input('gsm');
        $participant->ville = $request->input('ville');
        $participant->index_badge = 'Non';
        $participant->etat = 'Ajout';
        $participant->codebare =   $codebares->codebare++;
        $participant->type_chambre =  $checkIns->pack->type;
        $participant->check_in = $checkIns->pack->checkIn;
        $participant->check_out = $checkIns->pack->checkOut;
        $participant->nb_ticketsrepas  = $checkIns->pack->nbTicketsRepas;
        $participant->role_id = $request->input('role_id');
        $participant->hotel_id = $request->input('hotel_id');
        $participant->pack_id = $request->input('pack_id');

        $participant->save();
          //dd($participant);  
        return redirect('userBundel/choixconfirmer/'. $request->input('comptesociete_id').'/'. $request->input('event_id'))->with('status', 'Blog Post Form Data Has Been inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\choixsociete  $choixsociete
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\choixsociete  $choixsociete
     * @return \Illuminate\Http\Response
     */
    public function edit(choixsociete $choixsociete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\choixsociete  $choixsociete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, choixsociete $choixsociete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\choixsociete  $choixsociete
     * @return \Illuminate\Http\Response
     */
    public function destroy(choixsociete $choixsociete)
    {
        //
    }
}
