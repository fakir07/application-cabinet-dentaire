<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\RendezVous;
use App\Models\Patients;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $events = array();
    //   $bookings = Calendar::all();
      $bookings = RendezVous::all();
        $patients = Patients::all();

    foreach ($bookings as $booking) {
        $event = [
            'id'    => $booking->id,
            'title' => $booking->statu_rend,
            'start' => $booking->start_date,
            'end'   => $booking->end_date,
        ];

        if ($booking->type_rend == 'Historique Médical') {
            $event['color'] = "#924ACE"; // Set color for consultation
        } 
        
        if($booking->type_rend == 'Historique Médical'){
            $event['color'] = '#924ACE';
        }elseif($booking->type_rend == 'Examen Bucco-Dentaire'){
            $event['color']  = '#17c653';
        }elseif($booking->type_rend == 'Préoccupations Discutées'){
            $event['color']  = '#f6c000';
        }elseif($booking->type_rend == 'Options de Traitement'){
            $event['color'] = '#924ACE';
        }elseif($booking->type_rend == 'Rendez-vous Suivi'){
            $event['color'] = '#924ACE';

        }

        // Append the current event to the $events array
        $events[] = $event;
    }
    return view('rendezvous.aganda',compact('events','patients'));
    }

    public function store_t(Request $request){
        
            $patient= new Patients();
            $patient->name= $request->name;
            $patient->telephone= $request->telephone;
            $patient->email= $request->email;
            $patient->adresse= $request->adresse;
            $patient->ville= $request->ville;
            $patient->sex= $request->sex;
            $patient->age= $request->age;
            $patient->cin= $request->cin;
            $patient->cnss= $request->cnss;
            $patient->save();

        
        $booking = RendezVous::create([
            'start_date' => $request->start_date,
            'patient_id' => $patient->id,
            'type_rend' => $request->type_rend,
            'statu_rend' => $request->statu_rend,
            'end_date' => $request->end_date,
            'doctor_id' => auth()->user()->id,
        ]);

        $color = null;

        return response()->json([
            'id' => $booking->id,
            'title' => $booking->type_rend,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'color' => $color ? $color: '',

        ]);
    }
    public function store(Request $request)
    {
       

        $booking = RendezVous::create([
            'start_date' => $request->start_date,
            'patient_id' => $request->patient_id,
            'type_rend' => $request->type_rend,
            'statu_rend' => $request->statu_rend,
            'end_date' => $request->end_date,
            'doctor_id' => auth()->user()->id,
        ]);

        $color = null;

        return response()->json([
            'id' => $booking->id,
            'title' => $booking->type_rend,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'color' => $color ? $color: '',

        ]);
    }
    public function update(Request $request ,$id)
    {
        $booking = RendezVous::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $booking = RendezVous::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->delete();
        return $id;
    }
}