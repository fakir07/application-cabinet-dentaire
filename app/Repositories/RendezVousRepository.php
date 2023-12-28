<?php



namespace App\Repositories;

use App\Models\Patients;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Validator;




class  RendezVousRepository implements  RendezVousRepositoryInterface {


    
    public function index(){
        
        $patients = Patients::all();
        $rdvs = RendezVous::all();
        return view('rendezvous.index',compact('rdvs','patients'));
    }

    public function show(){
        return view('rendezvous.aganda');
    }
    public function salledattente(){
        $patients = Patients::all();
        $rdvs = RendezVous::where('statu_rend',"Patient En salle d'attente")->get();
       return view('rendezvous.salledattente',compact('rdvs','patients'));

    }
    public function store($request){

        // dd($request);

        try{
              
            $validator = Validator::make($request->all(),
                [
                    'patient_id' => 'required',
                    'start_date' => 'required',
                    'type_rend' => 'required',
                    'statu_rend' => 'required',
                ],
                []);
                
                if ($validator->fails()) {
                    return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $rend = new RendezVous();
                $rend->patient_id= $request->patient_id;
                $rend->doctor_id= $request->doctor_id;
                $rend->start_date= $request->start_date;
                $rend->type_rend= $request->type_rend;
                $rend->statu_rend= $request->statu_rend;
                $rend->save();
                
                
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
            return redirect()->route('rendezvous.index');
               
            } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);

        }
    }
    public function update($request){
        
        
                $rend = RendezVous::where('id',$request->id)->first();
                $rend->start_date= $request->start_date;
                $rend->type_rend= $request->type_rend;
                $rend->statu_rend= $request->statu_rend;
                $rend->save();
                
                toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                return redirect()->route('rendezvous.index');

    }
    public function destroy($request){

        try{
            $rdv = RendezVous::where('id',$request->id)->first();
            $rdv->delete();
        
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
            return redirect()->route('rendezvous.index');
            
        } catch (\Exception $e) {
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }
    public function add_rend($request){

        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'sex' => 'required',
            'age' => 'required',
            'email' => 'required',
            'start_date' => 'required',
            'type_rend' => 'required',
            'statu_rend' => 'required',
        ],
        [
            'name.required' => 'le Nom  et Obligatoire ',
            'telephone.required' => 'le telephone  et Obligatoire ',
            'adresse.required' => 'la adresse  et Obligatoire ',
            'ville.required' => 'la ville  et Obligatoire ',
            'sex.required' => 'le sex  et Obligatoire ',
            'age.required' => ' l age  et Obligatoire ',
        ]);
        

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
      
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


        // save profile 

        if ($request->hasfile('avatar')) {
                $name_files = $request->file('avatar')->getclientoriginalname();
                $imagePath = $request->file('avatar')->storeAs('Piece_De_jointe/Image_patients/'.$patient->id, $name_files, 'upload_PieceDejointe');
            }else{
                $imagePath="assets/media/svg/avatars/011-boy-5.svg";
            }
            
            $patient->avatar= $imagePath;
            $patient->save(); 
      


        /// insertt rend 

        $rend = new RendezVous();
        $rend->patient_id= $patient->id;
        $rend->doctor_id= $request->doctor_id;
        $rend->start_date= $request->start_date;
        $rend->type_rend= $request->type_rend;
        $rend->statu_rend= $request->statu_rend;
        $rend->save();
        
        toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
        return redirect()->route('rendezvous.index');

        

    }
    public function getpatient($id){
        $patients = Patients::where('id',$id)->first();
        return $patients;
    }

    public function updateStatus($request){

        $rdv = RendezVous::where('id',$request->id)->first();
        $rdv->statu_rend=$request->statu_rend;
        $rdv->save();
        return  redirect()->back();
        
        
    }
    
}