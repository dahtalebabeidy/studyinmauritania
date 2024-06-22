<?php

namespace App\Http\Controllers;
use App\Models\Departement;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        $departements = Departement::all();
        return view('Departements.index', ['departements' => $departements]);
    }

    public function show(Departement $departement)
    {
        $departement->load('programmes'); // Load the related programmes
        return view('departements.show', ['departement' => $departement]);
    }
}
