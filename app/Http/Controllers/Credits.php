<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\credit;

class Credits extends Controller
{
    public function index (){
     
     $all_credits = credit::
     orderBy('created_at', 'desc')
     ->simplePaginate(7);
        return view('welcome',compact('all_credits'));
    }
}
