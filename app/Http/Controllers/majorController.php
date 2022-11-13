<?php

namespace App\Http\Controllers;

use App\Models\major;
use Illuminate\Http\Request;
use App\Models\addevent;
class MajorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function major($id){
        $event = addevent::where('id',$id)->first();
        $major = major::where('addevents_id',$id)->get();
        return view('major')->with(['event'=>$event ,'major'=>$major]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_major(Request $request)
    {

        
        $major = new major();
        $major->addevents_id =$request->input('eventId');
        $major->pourcentage =$request->input('pourcentage');
        $major->save();

        //return response()->json($congres);
        return redirect('major/'.$request->input('eventId'))->with('status', 'Blog Post Form Data Has Been inserted');
    
    }
}
