<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\participants;

class ParticipantsController extends Controller
{
    //
    public function store_participants(Request $request)
    {

        $possibilite = new participants();
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
}
