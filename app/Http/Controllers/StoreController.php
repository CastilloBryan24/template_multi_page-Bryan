<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {

        $horaire = [
            (object) ["titre" => "Come On In", "sousTitre" => "We're Open"]
        ];

        $horaire2 = [
            (object) ["jour" => "Sunday", "statut" => "Closed"],
            (object) ["jour" => "Monday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Tuesday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Wednesday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Thursday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Friday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Saturday", "statut" => "9:00 AM to 5:00 PM"]
        ];

        $coordonnees = [
            (object) ["adresse" => "1116 Orchard Street", "commune" => "Golden Valley, Minnesota", "moment" => "Call Anytime", "numero" => "(317) 585-8468"]
        ];

        $about = [
            (object)["titre" => "Strong Coffee, Strong Roots", "sousTitre" => "About Our Cafe", "para" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.", "para2" => "We guarantee that you will fall in lust with our decadent blends the
            moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."]
        ];


        return view("pages.store", compact("horaire", "horaire2", "coordonnees", "about"));
    }
}
