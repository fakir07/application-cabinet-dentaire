<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use App\Repositories\PatientsRepositoryInterface;


class PatientsController extends Controller
{



    protected $Patients;

    public function __construct(PatientsRepositoryInterface $PatientsRepository )
    {
        $this->Patients = $PatientsRepository;
    }

  
    public function index()
    {
       
         return $this->Patients->index();
    }

 
    public function store(Request $request)
    {
        return $this->Patients->store($request);
    }
    public function update(Request $request)
    {
        return $this->Patients->update($request);
    }

   
    public function destroy(Request $request)
    {
        return $this->Patients->destroy($request);
    }
}