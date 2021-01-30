<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        $horaire = [
            (object) ["jour" => "Sunday", "statut" => "Closed"],
            (object) ["jour" => "Monday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Tuesday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Wednesday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Thursday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Friday", "statut" => "7:00 AM to 8:00 PM"],
            (object) ["jour" => "Saturday", "statut" => "9:00 AM to 5:00 PM"]
        ];

        return view("partials.store", compact("horaire"));
    }
}
