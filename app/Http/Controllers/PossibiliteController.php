<?php

namespace App\Http\Controllers;

use App\Models\possibilite;
use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\Contenu;
use App\Models\pack;
use App\Models\hotel;
use App\Models\role;

class PossibiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function possibilite($id)
    {
        $possibilites = possibilite::where('addevents_id', $id)->with('pack')->with('hotel')->with('addEvent')->with('role')->get();
        $event = addevent::whereId($id)->first();
        $role = role::where('addevents_id', $id)->get();
        $pack = pack::where('addevents_id', $id)->get();
        $hotel = hotel::where('addevents_id', $id)->get();
        return view('possibilite')->with(['possibilites' => $possibilites, 'event' => $event, 'pack' => $pack, "role" => $role, "hotel" => $hotel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_possibilite(Request $request)
    {

        $possibilite = new possibilite();
        $possibilite->addevents_id = $request->input('eventId');
        $possibilite->pack_id = $request->input('pack_id');
        $possibilite->role_id = $request->input('role_id');
        $possibilite->hotel_id = $request->input('hotel_id');
        $possibilite->plafond = $request->input('plafond');
        $possibilite->mantant = $request->input('mantant');
        $possibilite->save();

        //return response()->json($congres);
        return redirect('possibilite/' . $request->input('eventId'))->with('status', 'Blog Post Form Data Has Been inserted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\possibilite  $possibilite
     * @return \Illuminate\Http\Response
     */
    public function edit(possibilite $possibilite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\possibilite  $possibilite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, possibilite $possibilite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\possibilite  $possibilite
     * @return \Illuminate\Http\Response
     */
    public function destroy(possibilite $possibilite)
    {
        //
    }
}
