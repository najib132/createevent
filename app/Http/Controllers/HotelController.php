<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\Contenu;



class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hotel($id){
        $event = addevent::where('id',$id)->first();
        $contenu = Contenu::where('addevents_id',$id)->get();
        $hotel = hotel::where('addevents_id',$id)->get();
        return view('hotel')->with(['event'=>$event ,'contenu'=>$contenu, 'hotel'=>$hotel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_hotel(Request $request)
    {
    /*$request->validate([
            'checkIn' => 'required_if:old_image',
            'checkOut' => 'required_if:old_image',
        ]);*/
        
        $pack = new hotel();
        $pack->addevents_id =$request->input('eventId');
        $pack->hotel_name =$request->input('hotel_name');
        $pack->category =$request->input('category');
        $pack->save();

        //return response()->json($congres);
        return redirect('hotel/'.$request->input('eventId'))->with('status', 'Blog Post Form Data Has Been inserted');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}
