<?php

namespace App\Http\Controllers;

use App\Models\pack;
use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\Contenu;


class PackctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pack($id){
        $event = addevent::where('id',$id)->first();
        $contenu = Contenu::where('addevents_id',$id)->get();
        $pack = pack::where('addevents_id',$id)->get();
       return view('pack')->with(['event'=>$event ,'contenu'=>$contenu, 'pack'=>$pack]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_pack(Request $request)
    {
       /*$request->validate([
            'checkIn' => 'required_if:old_image',
            'checkOut' => 'required_if:old_image',
        ]);*/
        
        $pack = new pack();
        $pack->addevents_id =$request->input('eventId');
        $pack->num =$request->input('num');
        $pack->type =$request->input('type');
        $pack->checkIn =$request->input('checkIn');
        $pack->checkOut =$request->input('checkOut');
        $pack->nbTicketsRepas =$request->input('nbTicketsRepas');
        $pack->contenu =$request->input('contenu');
        $pack->save();

        //return response()->json($congres);
        return redirect('pack/'.$request->input('eventId'))->with('message', 'Pack Data Has Been inserted');
    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit_pack($id){
        $event = addevent::where('id', $id)->with('contenu')->first();
        $contenu = Contenu::where('id',$id)->first();
        $pack = pack::where('id',$id)->first();
            return view('editpack')->with([
                'contenu' => $contenu,
                'event' => $event,
                'pack' => $pack
            
            ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update_pack(Request $request, $id){
        //$event = addevent::where('id', $id)->with('contenu')->first();
        $pack = pack::where('id',$id)->first();
        $pack->num =$request->input('num');
        $pack->type =$request->input('type');
        $pack->checkIn =$request->input('checkIn');
        $pack->checkOut =$request->input('checkOut');
        $pack->nbTicketsRepas =$request->input('nbTicketsRepas');
        $pack->contenu =$request->input('contenu');
        $pack->save();
        //return redirect('configevent/'.$congres->addevents_id)->with(['message', 'Blog Post Form Data Has Been updated']);
        return redirect('pack/'.$pack->addevents_id)->with('message', 'Pack Data Has Been updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function delete_pack($id){
        $pack = Pack::where('id',$id)->first();
        $pack->delete();
        return redirect('pack/'.$pack->addevents_id)->with('message', 'Pack Data Has Been deleted');
    
        }
}
