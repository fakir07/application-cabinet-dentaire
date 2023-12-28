<?php
namespace App\Repositories;
use App\Models\Patients;
use App\Models\RendezVous;
use App\Models\medicament;
use App\Models\Ordonnance;



class ConsultationRepository implements ConsultationRepositoryInterface {

    
    public function index(){
        $salles = RendezVous::where('statu_rend',"Patient En salle d'attente")
        ->latest() 
        ->take(6)
        ->get();
        $patients = Patients::all();
        $rdvs = RendezVous::orderBy('created_at', 'desc')->get();
        
        

       return view('Consultation.index',compact('rdvs','salles','patients'));

    }
    public function store($request){
        
    }
    public function show($id){

        $salles = RendezVous::where('statu_rend',"Patient En salle d'attente")
        ->latest() 
        ->take(6)
        ->get();
        $rdvs = RendezVous::where('patient_id',$id)->with('patient')->first();

        $medcs = medicament::all();
        $ordos = Ordonnance::where('patient_id',$id)->get();
                
        return view('Consultation.show',compact('rdvs','salles','medcs','ordos'));
    }
    public function edit($request){
        
    }
    public function update($request){
        
    }
    public function destroy($request){
        
    }
    
}