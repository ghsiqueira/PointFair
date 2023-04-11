<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feira;

class EventController extends Controller
{
    public function index() {

        $feiras = Feira::all();

        return view('welcome',['feiras' => $feiras]);
    }

    public function create() {
        return view('feiras.create');
    }
}
