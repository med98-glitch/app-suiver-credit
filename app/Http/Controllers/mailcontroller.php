<?php

namespace App\Http\Controllers;

use App\Models\credit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\usermail;
use App\Mail\ToUser;
use App\Mail\LeLienDeVotreSituationActuelle;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    //

    public function send(Request $request)
    {

        $url = $request->url;
        $id = $request->id;

        $folder= credit::
        where('id',$id)
        ->get();

        $email= credit::
        select('email')
        -> where('id',$id)
        ->first();
      
      
        //Mail::to($email, )->send(new toUser($folder,$url));
        Mail::to('med.azns@gmail.com')->send(new LeLienDeVotreSituationActuelle($folder,$url));
        if($request){
            return back()->with('success','Votre commande a été envoyée avec succès');
          }else{
             return back()->with('fail','quelque chose s est mal passé');
          }
    }
}
