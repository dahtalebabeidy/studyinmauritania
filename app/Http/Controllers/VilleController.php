<?php

namespace App\Http\Controllers;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index(){
        $VillesFromDB= Ville::all();
     
        return view('Villes.Index',['villes'=>$VillesFromDB]);
    }

  public function show(Ville $ville){
  return view('Villes.Show',['ville'=> $ville]);
  }
   
}
