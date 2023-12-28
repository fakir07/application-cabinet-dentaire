<?php

namespace App\Http\Controllers;

use App\Models\Ordonnance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
            $validator = Validator::make($request->all(),
            [
                'nameOrd' => 'required',
                'patient_id' => 'required',
                'qnty' => 'required',
                'usejr' => 'required',
                'usekl' => 'required',
       
            ],
            [    
            ]);
            
    
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
        
                $Ordonnancement = new Ordonnance();
                $Ordonnancement->nameOrd = $request->nameOrd;
                $Ordonnancement->patient_id = $request->patient_id;
                $Ordonnancement->qnty = $request->qnty;
                $Ordonnancement->usejr = $request->usejr;
                $Ordonnancement->usekl = $request->usekl;
                $Ordonnancement->description = $request->description;
                $Ordonnancement->save();
    
                
                toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
                return redirect()->back();
                
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }    }

    /**
     * Display the specified resource.
     */
    public function show(Ordonnance $ordonnance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordonnance $ordonnance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordonnance $ordonnance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Ordonnance::where('id',$request->id)->delete();
        toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
        return redirect()->back();
    }
}