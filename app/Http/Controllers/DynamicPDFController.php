<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\addevent;
use App\Models\possibilite;
use App\Models\role;
use App\Models\pack;
use App\Models\hotel;
use App\Models\societe;
use App\Models\participants;
use App\Models\choixsociete;

class DynamicPDFController extends Controller
{

    public function index(Request $request, $societeId, $eventId)
    {
        $choixsociete = Choixsociete::where('comptesociete_id', $societeId)->with('pack')->with('hotel')->with('role')->with('comptesociete')->get();
        $possibilites = possibilite::where('addevents_id', $eventId)->with('pack')->with('hotel')->with('addEvent')->with('role')->with('comptesociete')->with('nombre')->get();
        //$choixsociete = Choixsociete::where('comptesociete_id', $societeId)->with('pack')->with('hotel')->with('role')->with('comptesociete')->get();
        
        if($request->has('download'))
        {
            $pdf = App::make('dompdf.wrapper');
            return $pdf->download('userBundel/dynamic_pdf.pdf');
        }

        return view('userBundel/dynamic_pdf')->with(['possibilites'=>$possibilites, 'choixsociete'=>$choixsociete]);
    }

}
