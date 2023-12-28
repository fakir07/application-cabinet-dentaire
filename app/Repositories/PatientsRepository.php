<?php  

namespace App\Repositories;
use App\Models\Patients;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;





class PatientsRepository  implements PatientsRepositoryInterface  {


    /// function index 
    public function index(){
        $patients = Patients::all();
        return view('patients.index',compact('patients'));
    }

    /// function store  Patients

    public function store($request){

        // dd($request);

        
        try {
          
            $validator = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'telephone' => 'required',
                    'adresse' => 'required',
                    'ville' => 'required',
                    'sex' => 'required',
                    'age' => 'required',
                    'email' => 'required',
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
                
                
                toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                return redirect()->route('patients.index');
                
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}

    /// function delete patients 

    public function destroy($request){

        
    try{        
        $patient= Patients::where('id',$request->id)->delete();
        toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
        return redirect()->route('patients.index');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
        
    }


    // function upadte patients 


    public function update($request){
        
        try {
          
            $validator = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'telephone' => 'required',
                    'adresse' => 'required',
                    'ville' => 'required',
                    'sex' => 'required',
                    'age' => 'required',
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
              
                $patient= Patients::where('id',$request->id)->first();
                // dd($patient);
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

                // verified  new request for upadte in rmove old image 

                 if ($request->avatar) {
                    File::delete(public_path($patient->avatar));
                }

                if ($request->hasfile('avatar')) {
                        $name_files = $request->file('avatar')->getclientoriginalname();
                        $imagePath = $request->file('avatar')->storeAs('Piece_De_jointe/Image_patients/'.$patient->id, $name_files, 'upload_PieceDejointe');
                }else{
                    $imagePath="assets/media/svg/avatars/011-boy-5.svg";
                }   
                $patient->avatar= $imagePath;
                $patient->save();                
                toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                return redirect()->route('patients.index');
                
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }

    
}