<?php

namespace App\Http\Controllers;

use App\Models\indiv;
use Illuminate\Http\Request;
use App\Models\addevent;
use Illuminate\Support\Facades\Mail;

class IndivController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usercongres($id)
    {
        $event = addevent::where('id',$id)->with('contenu')->first();
        //$contenu = Contenu::where('addevents_id',$id)->get();
       return view('userBundel/usercongres')->with(['event'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_indiv(Request $request)
    {
        
        $indiv = new indiv();
        $indiv->addevents_id = $request->input('eventId');
        $indiv->nom = $request->input('nom');
        $indiv->prenom = $request->input('prenom');
        $indiv->gsm = $request->input('gsm');
        $indiv->email = $request->input('email');
        $indiv->password = $request->input('password');
        $indiv->save();

        if ($indiv->save()) {
           
            // email data
    $email_data = array(
        'nom' => $indiv['nom'],
        'prenom' => $indiv['prenom'],
        'email' => $indiv['email'],
    );

    // send email with the template
    Mail::send('userBundel/welcome_emailindiv', $email_data, function ($message) use ($email_data) {
        $message->to($email_data['email'], $email_data['nom'], $email_data['prenom'])
            ->subject('Plateforme d\'inscription Beyond Com', 'activation du compte')
            ->from('contact.beyondcom@gmail.com', 'activation du compte');
    });

    //return $societe;
        }


        //return response()->json($congres);
        return redirect('userBundel/activeuser/'.$request->input('eventId'))->with('status', 'Blog Post Form Data Has Been inserted');
    
    }

    public function activeindiv(Request $request, $id){
        $event = addevent::where('id',$id)->with('contenu')->first();
        //$contenu = Contenu::where('addevents_id',$id)->get();
       return view('userBundel/activeuser'.$request->input('eventId'))->with(['event'=>$event]);
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
     * @param  \App\Models\indiv  $indiv
     * @return \Illuminate\Http\Response
     */
    public function show(indiv $indiv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indiv  $indiv
     * @return \Illuminate\Http\Response
     */
    public function edit(indiv $indiv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\indiv  $indiv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, indiv $indiv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indiv  $indiv
     * @return \Illuminate\Http\Response
     */
    public function destroy(indiv $indiv)
    {
        //
    }
}
