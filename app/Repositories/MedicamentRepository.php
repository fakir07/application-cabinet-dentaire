<?php 
namespace App\Repositories;
use App\Models\medicament;
use Illuminate\Support\Facades\Validator;


// R]hz#7O.+Q7v

class  MedicamentRepository implements  MedicamentRepositoryInterface {


    public function index(){
        $medicaments = medicament::all();
        return view('medicament.index',compact('medicaments'));
    }
    public function store($request){


        try{
        $validator = Validator::make($request->all(),
        [
            'title' => 'required',
   
        ],
        [
            'title.required' => 'le Nom  et Obligatoire ',

        ]);
        

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

    
            $medicament = new medicament();
            $medicament->title = $request->title;
            $medicament->description = $request->description;
            $medicament->save();

            
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
            return redirect()->route('medicament.index');
            
} catch (\Exception $e) {
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}
      
    }
    public function update($request){
        try{
            $validator = Validator::make($request->all(),
            [
                'title' => 'required|unique:medicaments,title,'.$request->id,

       
            ],
            [
                'title.required' => 'le Nom  et Obligatoire ',
    
            ]);
            
    
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
        
                $medicament = medicament::where('id',$request->id)->first();
                $medicament->title = $request->title;
                $medicament->description = $request->description;
                $medicament->save();
    
                
                toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                return redirect()->route('medicament.index');
                
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
        
        
    }
    public function destroy($request){
        
        try{
            $medicament = medicament::where('id',$request->id)->delete();
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
            return redirect()->route('medicament.index');
            
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
          
    }
    
}