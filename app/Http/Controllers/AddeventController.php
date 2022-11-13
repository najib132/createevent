<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\post;
use App\Models\contenu;


class AddeventController extends Controller
{
    //
    public function addEvent(Request $request)
    {


        if ($request->has('image_logo')) {
            $file = $request->image_logo;
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
        }

        if ($request->has('image_logo')) {
            $file = $request->image_slide;
            $slide = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $slide);
        }

        if ($request->has('image_logo')) {
            $file = $request->image_banier;
            $baniere = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $baniere);
        }

        if ($request->has('image_logo')) {
            $file = $request->programme;
            $pro = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $pro);
        }



        $postee = new addevent();
        $postee->name = $request->name;
        //$postee->congres_id = $request->congres_id;
        $postee->image_logo = $image_name;
        $postee->image_slide = $slide;
        $postee->image_banier = $baniere;
        $postee->programme = $pro;
        $postee->date_debut = $request->date_debut;
        $postee->date_fin = $request->date_fin;
        $postee->lieux = $request->lieux;
        $postee->siteweb = $request->siteweb;
        $postee->perefix = $request->perefix;
        $postee->deadline = $request->deadline;
        $postee->affichage_deadline = $request->affichage_deadline;
        $postee->Urlspon = $request->Urlspon;
        $postee->Urlheberg = $request->Urlheberg;
        $postee->save();
        return redirect()->route("test")->with([

            'success' => 'article ajoute avec success'

        ]);
    }

    public function dataEvent()
    {
        $congres = addevent::all();
        return view('congres')->with([
            'congres' => $congres
        ]);
    }

    public function configevent($id)
    {
        $event = addevent::where('id',$id)->with('contenu')->first();
        $contenu = Contenu::where('addevents_id',$id)->get();
       return view('configevent')->with(['event'=>$event, 'contenu'=>$contenu]);
    }

    public function usercongres($id)
    {
        $event = addevent::where('id',$id)->with('contenu')->first();
        //$contenu = Contenu::where('addevents_id',$id)->get();
       return view('userBundel/usercongres')->with(['event'=>$event]);
    }
}
