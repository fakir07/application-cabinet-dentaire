<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\Patients;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $salles = RendezVous::where('statu_rend',"Patient En salle d'attente")
        ->latest() 
        ->take(6)
        ->get();
        $patients = Patients::all();

        
        $rdvs = RendezVous::orderBy('created_at', 'desc')->get();

       return view('home',compact('rdvs','salles','patients'));

        // return view('home');
    }
}