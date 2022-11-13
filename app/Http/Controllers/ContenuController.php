<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\contenu;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Models\addevent;
use App\Models\post;
use Illuminate\Support\Facades\DB;

class ContenuController extends Controller
{
    // function return view with $id
    public function contenu($id)
    {   
        $event = addevent::where('id', $id)->with('contenu')->first();
        return view('configevent')->with(
            'event',
            $event
        );
    }

// FUNCTION STORE DATA WITH HIDDEN INPUT $ID
    public function store(Request $request)
    {
        
        $congres = new contenu();
        $congres->contenu = $request->input('contenu');
        $congres->addevents_id =$request->input('eventId');
        $congres->save();

        //return response()->json($congres);
        return redirect('configevent/'.$request->input('eventId'))->with('message', 'Contenu Data Has Been inserted');
    
    }

    public function edit($id){
        $event = addevent::where('id', $id)->with('contenu')->first();
        $contenu = Contenu::where('id',$id)->first();
            return view('editcontenu')->with([
                'contenu' => $contenu,
                'event' => $event
            
            ]);
    }

    public function update_contenu(Request $request, $id){
        //$event = addevent::where('id', $id)->with('contenu')->first();
        $congres = Contenu::where('id',$id)->first();
        $congres->contenu = $request->input('contenu');
        $congres->save();
        //return redirect('configevent/'.$congres->addevents_id)->with(['message', 'Blog Post Form Data Has Been updated']);
        return redirect('configevent/'.$congres->addevents_id)->with('message', 'Contenu Data Has Been updated');
    
    }

    public function delete($id){
        $congres = Contenu::where('id',$id)->first();
        $congres->delete();
        return redirect('configevent/'.$congres->addevents_id)->with('message', 'Contenu Data Has Been deleted');
    
        }
    




    }
