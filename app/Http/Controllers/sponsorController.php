<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sponsor($id){
        $event = addevent::where('id',$id)->first();
        $sponsor = sponsor::where('addevents_id',$id)->get();
        return view('sponsor')->with(['event'=>$event ,'sponsor'=>$sponsor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_sponsor(Request $request)
    {

        
        $sponsor = new sponsor();
        $sponsor->addevents_id =$request->input('eventId');
        $sponsor->sponsoring =$request->input('sponsoring');
        $sponsor->designation =$request->input('designation');
        $sponsor->prix =$request->input('prix');
        $sponsor->save();

        //return response()->json($congres);
        return redirect('sponsor/'.$request->input('eventId'))->with('Sponssor', 'Blog Post Form Data Has Been inserted');
    
    }
}