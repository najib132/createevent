<?php

namespace App\Http\Controllers;

use App\Models\societe;
use Illuminate\Http\Request;
use App\Models\addevent;
use App\Models\possibilite;
use App\Models\role;
use App\Models\pack;
use App\Models\hotel;
use App\Models\choixsociete;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usercongres($id)
    {
        $event = addevent::where('id', $id)->with('contenu')->first();
        $societe = societe::where('addevents_id', $id)->get();
        return view('userBundel/usercongres')->with(['event' => $event, 'societe' => $societe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_societe(Request $request)
    {

        $societe = new societe();
        $societe->addevents_id = $request->input('eventId');
        $societe->nom = $request->input('nom');
        $societe->prenom = $request->input('prenom');
        $societe->gsm = $request->input('gsm');
        $societe->email = $request->input('email');
        $societe->password = $request->input('password');
        $societe->Nm_societe = $request->input('Nm_societe');
        $societe->ice = $request->input('ice');
        $societe->adressePh = $request->input('adressePh');
        $societe->responssable = $request->input('responssable');
        $societe->game = $request->input('game');
        $societe->service = $request->input('service');
        $societe->save();

        if ($societe->save()) {

            // email data
            $email_data = array(
                'Nm_societe' => $societe['Nm_societe'],
                'email' => $societe['email'],
                'addevents_id' => $societe['addevents_id']
            );

            //send email with the template
            Mail::send('userBundel/welcome_email', $email_data, function ($message) use ($email_data) {
             $message->to($email_data['email'], $email_data['Nm_societe'])
                    ->subject('Plateforme d\'inscription Beyond Com', 'activation du compte')
                    ->from('contact.beyondcom@gmail.com', 'activation du compte');
             });
        }
        //return response()->json($congres);
        return redirect('userBundel/activeuser/' . $request->input('eventId'))->with('message', 'veuillez vérifier votre boîte de réception pour
        activeé votre compte');
    }

    public function activeuser(Request $request, $id)
    {
        $event = addevent::where('id', $id)->with('contenu')->first();
        //$contenu = Contenu::where('addevents_id',$id)->get();
        return view('userBundel/usercongres' . $request->input('eventId'))->with('succuess', 'Votre compte a été activer');
    }
    /**/

    function loginUser(Request $request)
    {
        //$Societe = Societe::where('addevents_id', $request->id)->first();
        $Societe = Societe::where('email', $request->email)->first();
        $Societe2 = Societe::where('password', $request->password)->first();
        // print_r($data);
        if (!$Societe || !$Societe2) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        /*$response = [
        'Societe' => $Societe,

    ];*/

        return redirect('userBundel/dashboard/' . $request->input('eventId'))->with('message', 'veuillez vérifier votre boîte de réception pour
    activeé votre compte');
    }

    public function dashboard(Request $request, $id)
    {
        /* $event = addevent::where('id',$id)->with('contenu')->first();
        $societe = societe::where('addevents_id',$id)->get();
        return view('userBundel/dashboard')->with(['event'=>$event, 'societe' => $societe]);
        */

        $possibilites = possibilite::where('addevents_id', $id)->with('pack')->with('hotel')->with('addEvent')->with('role')->with('nombre')->get();
        $event = addevent::whereId($id)->first();
        $role = role::where('addevents_id', $id)->get();
        $pack = pack::where('addevents_id', $id)->get();
        $hotel = hotel::where('addevents_id', $id)->get();
        $societe = societe::where('addevents_id', $id)->get();
        return view('userBundel/dashboard')->with(['societe' => $societe, 'possibilites' => $possibilites, 'event' => $event, 'pack' => $pack, "role" => $role, "hotel" => $hotel]);
    }

    public function choixsociete(Request $request)
    {
        $eventId = $request['eventId'];

        for ($i = 0; $i < count($request->nombre); $i++) {
            $choixsociete[] = [
                'comptesociete_id' => $request->comptesociete_id,
                'pack_id' => isset($request->pack_id[$i]) ? $request->pack_id[$i] : null,
                'hotel_id' => isset($request->hotel_id[$i]) ? $request->hotel_id[$i] : null,
                'role_id' => isset($request->role_id[$i]) ? $request->role_id[$i] : null,
                'nombre' =>  isset($request->nombre[$i]) ? $request->nombre[$i] : null,
                'event_id' => $eventId,
            ];
        }
        /* dd($choixsociete); */

        choixsociete::insert($choixsociete);
        return redirect('userBundel/choixconfirmer/' . $request->comptesociete_id . '/' . $eventId)->with(['choixsociete' => $choixsociete,])->with('message', 'Les détails d\'hébergement de vos inscrits ont été enregirstrés avec succès. Nous traiterons votre demande aussi tôt que possible. Aucune confirmation n\'est faite suite à votre demande sans accord de notre agence.');
    }
}
