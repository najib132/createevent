<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\Contenu;
use App\Models\pack;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rol_congres($id){
        $event = addevent::where('id',$id)->first();
        $contenu = Contenu::where('addevents_id',$id)->get();
        $role = role::where('addevents_id',$id)->get();
        return view('role')->with(['event'=>$event ,'contenu'=>$contenu, 'role'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_role(Request $request)
    {
    /*$request->validate([
            'checkIn' => 'required_if:old_image',
            'checkOut' => 'required_if:old_image',
        ]);*/
        
        $pack = new role();
        $pack->addevents_id =$request->input('eventId');
        $pack->role =$request->input('role');
        $pack->save();

        //return response()->json($congres);
        return redirect('role/'.$request->input('eventId'))->with('message', 'Role Post Form Data Has Been inserted');
    
    }

    public function edit_role($id){
        $event = addevent::where('id', $id)->with('contenu')->first();
        $contenu = Contenu::where('id',$id)->first();
        $pack = pack::where('id',$id)->first();
        $role = role::where('id',$id)->first();
            return view('editrole')->with([
                'contenu' => $contenu,
                'event' => $event,
                'pack' => $pack,
                'role' => $role
            
            ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update_role(Request $request, $id){
        //$event = addevent::where('id', $id)->with('contenu')->first();
        $role = role::where('id',$id)->first();
        $role->role =$request->input('role');
        $role->save();
        //return redirect('configevent/'.$congres->addevents_id)->with(['message', 'Blog Post Form Data Has Been updated']);
        return redirect('role/'.$role->addevents_id)->with('message', 'Role Data Has Been updated');
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    
    public function delete_role($id){
        $role = role::where('id', $id)->first();
        $role->delete();
        return redirect('role/'.$role->addevents_id)->with('message', 'Role Data Has Been deleted');
    

    }
}
