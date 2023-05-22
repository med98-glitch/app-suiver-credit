<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\credit;
use Illuminate\Support\Facades\DB;
class findfolder extends Controller
{
    public function index (){
        $all_credits = DB::table('credits')->select('nom', 'prenom','typecredits')
        ->groupBy('nom')->distinct()
        ->get();

        $all_credits_prenom = DB::table('credits')->select('nom', 'prenom','typecredits')
        ->groupBy('prenom')->distinct()
        ->get();

        $all_credits_typrcredits = DB::table('credits')->select('typecredits')
        ->groupBy('typecredits')->distinct()->get();
           return view('searche',compact('all_credits','all_credits_typrcredits','all_credits_prenom'));
       }

       public function getfolders (Request $request){
        $nom = $request->nom;
        $prenom = $request->prenom;
        $type = $request->type;


        $folder= credit::
        where('nom',$nom)
        ->where('prenom',$prenom)
        ->where('typecredits',$type)
        ->get();
           return view('folders',compact('folder'));
       }

       //details folders
       public function details (Request $request){
        $id = $request->Z3pzdHJ2I;
        $datea = $request->datea;
        $dateb = $request->dateb;
        $nom = $request->nom;
 
 

        $details= credit::
        where('id',$id)
        ->where('created_at',$datea)

        ->where('nom',$nom)
    
      
        ->get();
           return view('details',compact('details'));
       }
}
 