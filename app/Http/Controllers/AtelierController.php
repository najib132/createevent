<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;
use App\Models\addevent;
use App\Models\atelier;

class AtelierController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function atelier($id){
        $event = addevent::where('id',$id)->first();
        $role = role::where('addevents_id',$id)->get();
        $atelier = atelier::where('addevents_id',$id)->get();
        return view('atelier')->with(['event'=>$event ,'atelier'=>$atelier, 'role'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_atelier(Request $request)
    {
    /*$request->validate([
            'checkIn' => 'required_if:old_image',
            'checkOut' => 'required_if:old_image',
        ]);*/
        
        $atelier = new atelier();
        $atelier->addevents_id =$request->input('eventId');
        $atelier->name =$request->input('name');
        $atelier->mantant =$request->input('mantant');
        $atelier->role =$request->input('role');
        $atelier->save();

        //return response()->json($congres);
        return redirect('atelier/'.$request->input('eventId'))->with('status', 'Atelier Data Has Been inserted');
    
    }
}