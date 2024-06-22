<?php

namespace App\Http\Controllers;
use App\Models\NkcStatistique;
use App\Models\Ndbstatistique;
use App\Models\ZrtStatistique;
use App\Models\LayounStatistique;
use App\Models\AlegStatistique;
use App\Models\RossoStatistique;

use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function indexNktt(){
       
        $students = NkcStatistique::all();
         $data = [
            'Annee' => [],
            'universities' => [
                'ISCAE' => [],
                'IUP'=>[],
                'SupNum'=>[],
                'UNA_FST'=>[],
                'UNA_FLSH'=>[],
                'UNA_FM'=>[],
                'UNA_FSJE'=>[],
                'ESP'=>[]
            ]
            ];

            foreach($students as $student){
                $data['Annee'][]= $student->Annee;
                $data['universities']['ISCAE'][] = $student->ISCAE;
                $data['universities']['IUP'][] = $student->IUP;
                $data['universities']['SupNum'][] = $student->SupNum;
                $data['universities']['UNA_FST'][] = $student->UNA_FST;
                $data['universities']['UNA_FLSH'][] = $student->UNA_FLSH;
                $data['universities']['UNA_FM'][] = $student->UNA_FM;
                $data['universities']['UNA_FSJE'][] = $student->UNA_FSJE;
                $data['universities']['ESP'][] = $student->ESP;
            }
        return view('Statistiques.IndexNktt',compact('data'));
    }

    public function indexNdb(){
        $students = Ndbstatistique::all();
         $data = [
            'Annee' => [],
            'universities' => [
                'ISPLTI'=>[],
                'ISSM' => []
            ]
            ];

            foreach($students as $student){
                $data['Annee'][]= $student->Annee;
                $data['universities']['ISPLTI'][] = $student->ISPLTI;
                $data['universities']['ISSM'][] = $student->ISSM;
            }
        return view('Statistiques.IndexNdb',compact('data'));
    }

    public function indexZrt(){
        $students = ZrtStatistique::all();
         $data = [
            'Annee' => [],
            'universities' => [
                'IS2M'=>[]
            ]
            ];

            foreach($students as $student){
                $data['Annee'][]= $student->Annee;
                $data['universities']['IS2M'][] = $student->IS2M;
            }
        return view('Statistiques.IndexZrt',compact('data'));
    }

    public function indexLayoune(){
        $students = LayounStatistique::all();
         $data = [
            'Annee' => [],
            'universities' => [
                'USI'=>[]
            ]
            ];

            foreach($students as $student){
                $data['Annee'][]= $student->Annee;
                $data['universities']['USI'][] = $student->USI;
            }
        return view('Statistiques.IndexLayoune',compact('data'));
    }

    public function indexAleg(){
        $students = AlegStatistique::all();
         $data = [
            'Annee' => [],
            'universities' => [
                'ISM_BTPU'=>[]
            ]
            ];

            foreach($students as $student){
                $data['Annee'][]= $student->Annee;
                $data['universities']['ISM_BTPU'][] = $student->ISM_BTPU;
            }
        return view('Statistiques.IndexAleg',compact('data'));
    }

    public function indexRosso(){
        $students = RossoStatistique::all();
         $data = [
            'Annee' => [],
            'universities' => [
                'ISET'=>[]
            ]
            ];

            foreach($students as $student){
                $data['Annee'][]= $student->Annee;
                $data['universities']['ISET'][] = $student->ISET;
            }
        return view('Statistiques.IndexRosso',compact('data'));
    }
    
}
