<?php

namespace App\Http\Controllers;
use App\Models\Universite;

use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    public function index()
    {
        $universites = Universite::all();
        return view('universites.index', ['universites' => $universites]);
    }

    public function show(Universite $universite)
    {
        $universite->load('departements');
        return view('Universites.Show', ['universite' => $universite]);
    }
}
